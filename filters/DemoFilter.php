<?php
/**
 * Created by PhpStorm.
 * User: freek
 * Date: Oct 11, 2010
 * Time: 11:23:09 PM
 * To change this template use File | Settings | File Templates.
 */

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
            <head>
                <body>
                <form method=POST action="<?= $_POST['cortolocation'] ?>">
                    <input type="submit" name="submit" value="Continue processing ...">
                    <input type="hidden" name="cortopassthru" value="<?= $_POST['cortopassthru'] ?>">
<p>This is a Corto "<?= $_POST['cortophase'] ?>" filter with user interaction. Just click to 'Continue' button to continue.
</p>
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
        $samlattribute = &$_SESSION['DemoFilterClassState']['receivedResponse']
        ['saml:Assertion']['saml:AttributeStatement'][0]['saml:Attribute'];
        $attributes = attributes2array($samlattribute);
        $attributes['uid'][] = '-x-';
        $samlattribute = array2attributes($attributes);

        if ($_POST['cortoreturn'] == 'array') {
            return $_SESSION['DemoFilterClassState'];
        } else {
            header('X-Corto-Return: true');
            print json_encode($_SESSION['DemoFilterClassState']);
            exit;
        }
    }
}
