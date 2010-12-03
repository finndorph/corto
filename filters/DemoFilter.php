<?php

class DemoFilterClass {

    static function showWayf($params)
    {
        $request = $params['cortodata']['request'];
        $server = $params['cortodata']['server'];

        if ($idp = nvl($_POST, '_idp_')) {
            $server->sendAuthenticationRequest($request, $idp);
        } else {

            $candidateIDPs = $server->getAllowedIdps();

            $output = $server->renderTemplate(
                'discover',
                array(
                    'action' => $params['cortolocation'],
                    'cortopassthru' => $params['cortopassthru'],
                    'idpList' => $candidateIDPs,
                ));
            $server->sendOutput($output);
            exit;
        }
    }

    static function democonsent($params)
     {
         $server = $params['cortodata']['server'];
         if ($params['cortofirstcall']) {
             $response = $params['cortodata']['response'];

             $attributes = attributes2array(
                 $response['saml:Assertion']['saml:AttributeStatement'][0]['saml:Attribute']
             );

             print $server->renderTemplate(
                 'consent',
                 array(
                     'action' => $params['cortolocation'],
                     'attributes' => $attributes,
                     'cortopassthru' => $params['cortopassthru'],
                 ));
             exit;
         }
         if (nvl($_POST, 'consent') !== 'yes') {
             print $server->renderTemplate('noconsent');
             exit;
         }
         #return $params['cortodata'];
     }

    static function democache($params)
     {
         $server = $params['cortodata']['server'];
         if ($params['cortofirstcall']) {
             $cd = $params['cortodata'];

             print_r($cd['candidateIDPs']);
             print_r($cd['request']);
              print $server->renderTemplate(
                 'consent',
                 array(
                     'action' => $params['cortolocation'],
                     'attributes' => array('cache' => 'cache'),
                     'cortopassthru' => $params['cortopassthru'],
                 ));
             exit;
         }
         if (nvl($_POST, 'consent') !== 'yes') {
             print $server->renderTemplate('noconsent');
             exit;
         }
         #return $params['cortodata'];
     }


    static function demofilter()
    {
        if ($_POST['cortoreturn'] == 'json') {
            session_name('backend');
            session_start();
        }

        if ($_POST['cortofirstcall']) {
            $_SESSION['DemoFilterClassState'] = $_POST['cortodata'];
            ?>
            <html>
            <body>
            <form method=POST action="<?= $_POST['cortolocation'] ?>"><input
                    type="submit" name="submit" value="Continue processing ..."> <input
                    type="hidden" name="cortopassthru"
                    value="<?= $_POST['cortopassthru'] ?>">

                <p>This is a Corto "<?= $_POST['cortophase'] ?>" filter with user
                    interaction. Just click to 'Continue' button to continue.</p>
            </form>
<pre>
<?= print_r($_POST['cortodata'], 1); ?>
                </pre>
            </body>
            </head>
            </html>

            <?php
            exit;
        }
        $samlattribute = &$_SESSION['DemoFilterClassState']['response']
        ['saml:Assertion']['saml:AttributeStatement'][0]['saml:Attribute'];
        $attributes = attributes2array($samlattribute);
        $attributes['uid'][] = '-x-';
        $samlattribute = array2attributes($attributes);

        $ret = $_SESSION['DemoFilterClassState'];
        unset($_SESSION['DemoFilterClassState']);
        if ($_POST['cortoreturn'] == 'array') {
            return $ret;
        } else {
            header('X-Corto-Return: true');
            print json_encode($ret);
            exit;
        }
    }
}
