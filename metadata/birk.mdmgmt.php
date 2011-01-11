<?php
error_reporting(E_ALL);

$really = in_array('--really', $argv);

require dirname(__FILE__) . '/../library/Corto/cortolib.php';
require dirname(__FILE__) . '/../library/Corto/XmlToArray.php';
require dirname(__FILE__) . '/../library/Corto/Module/Metadata.php';

$metadatafile = dirname(__FILE__) . '/birk_optimized_metadata.php';

preparemetadataforbirk($metadatafile, $really);

function preparemetadataforbirk($metadatafile, $really = false)
{
    $meta = new Corto_Module_Metadata();

    $janusconfig = array(
        'test' => array(
            'md' => 'https://janus.wayf.dk/module.php/janus/exportentities.php?type[]=saml20-idp&state=testaccepted&external=corto-test',
            'wayf' => 'https://testidp.wayf.dk',
        ),
        'qa' => array(
            'md' => 'https://janus.wayf.dk/module.php/janus/exportentities.php?type[]=saml20-idp&state=QAaccepted&external=corto-qa',
            'wayf' => 'https://betawayf.wayf.dk',
        ),
        'prod' => array(
            'md' => 'https://janus.wayf.dk/module.php/janus/exportentities.php?type[]=saml20-idp&state=prodaccepted&external=corto-prod',
            'wayf' => 'https://wayf.wayf.dk',
        ),
    );


    $testqaprod = 'qa';

    preg_match("/^([^\.]+)/", basename(__FILE__), $dollar);

    $instance = $dollar[1];

    $metadatasources = array(
        'public:xml:' . $janusconfig[$testqaprod]['md'],
        'private:php:' . dirname(__FILE__) . '/birk.meta.php',
        'remote:xml:https://betawayf.wayf.dk/saml2/idp/metadata.php',
    );

    $meta->prepareMetadata($metadatasources, '', $instance);

    $metadatafile = dirname(__FILE__) . '/' . $instance . '.optimized.metadata.php';

    if (0) {
        $md =  include $metadatafile;
        $lookuptablextra = array();
        foreach ($md as $id => $entity) {
            #unset($entity['original']);
            if (nvl3($entity, 'IDP', 'corto:IDPList', 0) != 'https://wayf.wayf.dk') {
                $entities[$id] = $entity;
                continue;
            } else {
                if (1) {
                    $entity['IDP']['corto:IDPList'][0] = 'https://betawayf.wayf.dk';
                    #$entity['IDP']['SingleSignOnService'][0]['Binding'] = 'JSON-Redirect';
                    $entities[$id] = $entity;
                    #$md['lookuptable']['testing'][$entity['IDP']['SingleSignOnService'][0]['Location']]['Binding'] = 'JSON-Redirect';
                    continue;
                };


                $newid = preg_replace("/^(_HOSTED_)/", '$1/proxy', $id);


                $newentity = $entity;
                # $newentity['IDP']['corto:IDPList'] = array('_HOSTED_/wayfwayf.wayf.dk', $id);
                #$newentity['IDP']['SingleSignOnService'][0]['Binding'] = 'JSON-Redirect';
                $newentity['IDP']['corto:IDPList'] = array('_HOSTED_/betawayf.wayf.dk', $id);
                $newentity['entityID'] = $newid;
                $lookuptablextra[$newid] = true;
                $sso = nvl3($newentity['IDP'], 'SingleSignOnService', 0, 'Location');

                $asc = $sso . "/ACS";
                $entity['SP']['AssertionConsumerService'] =
                        array(
                            array(
                                'Location' => $asc,
                                'Binding' => 'JSON-Redirect',
                            ),
                            'default' => 0,
                        );

                $lookuptablextra[$asc] = array(
                    'EntityID' => $id,
                    'Service' => 'AssertionConsumerService',
                    'Binding' => 'JSON-Redirect',
                );


                $sso = preg_replace("/^(_HOSTED_)/", '$1/proxy', $sso);
                $newentity['IDP']['SingleSignOnService'][0]['Location'] = $sso;

                $lookuptablextra[$sso] = array(
                    'EntityID' => $newid,
                    'Service' => 'SingleSignOnService',
                    'Binding' => 'JSON-Redirect',
                );


                $entities[$newid] = $newentity;

                unset($entity['IDP']['corto:IDPList']);
                $entity['IDP']['corto:IDPList'][0] = '_COHOSTED_/null.php';
                #$entities[$id] = $entity;
            }
        }

        print "#: " . count($entities['md']);
        $export = array('md' => $entities['md'], 'lookuptable' => array_merge($md['lookuptable'], $lookuptablextra));
        if ($really) {
            file_put_contents($metadatafile . '.tmp', "<?php\nreturn " . var_export($export, true) . ";");
            @rename($metadatafile . '.tmp', $metadatafile);
            print " metadata written to: ";
            system("ls -l $metadatafile");
        } else {
            print_r($export);
        }
    }
    # system("ls -l $metadatafile");
}
