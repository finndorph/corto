<?php

class StdSingleLogonService {

    static function sso()
    {
        $request = $_POST['cortodata']['request'];
        $server = $_POST['cortodata']['server'];
        $params = $_POST['cortodata']['params'];

        // If we configured an IDPList in metadata this is our primary scoping
        $scopedIDPs = $server->getPresetIDPs();

        /**
         * Add scoping in request to configured scoping - this is NOT according to the spec
         * which says that you MUST append to a received IDPList
         */
        foreach ((array) nvl3($request, 'samlp:Scoping', 'samlp:IDPList', 'samlp:IDPEntry') as $IDPEntry) {
            $scopedIDPs[] = $IDPEntry['_ProviderID'];
        }

        $requesterIDs = array($params['EntityID'], $request['saml:Issuer']['__v']);

        // filter out already visited proxies (RequesterID) to prevent looping ...
        foreach ((array) nvl2($request, 'samlp:Scoping', 'samlp:RequesterID') as $requesterID) {
            $requesterIDs[] = $requesterID['__v'];
        }

        // remove issuer + us from scope for use now ..
        $relevantScopedIDPs = array_diff($scopedIDPs, $requesterIDs);

        // Get all registered Single Sign On Services
        $candidateIDPs = $server->getAllowedIdps();

        // If we have scoping, filter out every non-scoped IdP
        $candidateIDPs = empty($relevantScopedIDPs) ? $candidateIDPs : array_intersect($relevantScopedIDPs, $candidateIDPs);

        // 1+ candidate found and 1+ in scoped, send authentication request to the first one
        if ($idp = array_shift($candidateIDPs)) {
            return $server->sendAuthenticationRequest($request, $idp, $relevantScopedIDPs);
        }

        // No IdPs found! Send an error response back.
        if (empty($candidateIDPs)) {
            $response = $server->createErrorResponse($request, 'NoSupportedIDP');
            return $server->sendResponseToRequestIssuer($request, $response);
        }

        // 1+ non-scoped IdPs found, but isPassive attribute given, unable to continue
        // NO call wayf first it might have an idea ...
        if (nvl($request, '_IsPassive')) {
            $response = $server->createErrorResponse($request, 'NoPassive');
            return $server->sendResponseToRequestIssuer($request, $response);
        }

        // Store the request in the session
        $id = $request['_ID'];
        $_SESSION[$id]['SAMLRequest'] = $request;

        // Show WAYF
        $server->getSessionLog()->debug("SSO: Showing WAYF");
        return showWayf($request, $candidateIDPs);
    }

}

class DemoFilterClass {

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
