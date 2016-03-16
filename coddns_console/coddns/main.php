<?php
/**
 * <copyright company="CODDNS">
 * Copyright (c) 2013 All Right Reserved, http://coddns.es/
 *
 * THIS CODE AND INFORMATION ARE PROVIDED "AS IS" WITHOUT WARRANTY OF ANY
 * KIND, EITHER EXPRESSED OR IMPLIED, NO INCLUDING THE WARRANTIES OF
 * MERCHANTABILITY AND/OR FITNESS FOR A PARTICULAR PURPOSE.
 *
 * </copyright>
 * <author>Fco de Borja Sanchez</author>
 * <email>fborja.sanchezs@gmail.com</email>
 * <date>2016-02-11</date>
 * <update>2016-02-11</udate>
 * <summary> </summary>
 */

require_once (dirname(__FILE__) . "/include/config.php");
require_once (dirname(__FILE__) . "/lib/util.php");
require_once (dirname(__FILE__) . "/lib/coduser.php");

if (! defined("_VALID_ACCESS")) { // Avoid direct access
    header ("Location: " . $config["html_root"] . "/");
    exit (1);
}

$auth_level_required = get_required_auth_level('','main','');
$user = new CODUser();
$user->check_auth_level($auth_level_required);

session_start();
if (!isset($_SESSION["lan"])){
    $_SESSION["lan"] = "es";
}
$lan = $_SESSION["lan"];
session_write_close();


/* CASTELLANO */
$text["es"]["main_title"]="<h2>&iexcl;Hola!</h2>";
$text["es"]["main_welcome"]="
    <p>&iquest;Necesitas acceso a tu <b>servidor privado</b> de casa <b>desde internet</b>? &iquest;o quieres ver las c&aacute;maras de vigilancia de tu domicilio? Es posible que prefieras <b>acceder a tus contenidos multimedia desde cualquier sitio</b> sin tener que cargar con un disco duro extra&iacute;ble o contratar (y pagar...) una IP est&aacute;tica, o tener que confirmar tu direcci&oacute;n de correo cada mes para mantener el servicio...</p>
    <br>
    <img src=\"" . $config["html_root"] . "/rs/img/coddns_schema.png\" alt='schema'/>
    <br>
    <p><b>&iexcl;Para eso estamos aqu&iacute;!</b></p>
    <br>
    <p>Con CODDNS tendr&aacute;s siempre una etiqueta a trav&eacute;s de la cual <b>podr&aacute;s acceder a la red de tu casa</b>, sin tener que estar preocupandote de los cambios en la IP del router.</p>
    <p>Simplemente asocia una etiqueta disponible a tu direcci&oacute;n IP, instala el actualizador y accede a tu equipo desde cualquier parte de Internet.</p>
    <br>
    <img src=\"" . $config["html_root"] . "/rs/img/coddns_schema1.png\" alt='schema'/>
    <br>
    <p><b>Bienvenidos</b></p>
    <br>
    <hr>
";

/* ENGLISH */
$text["en"]["main_title"]="<h2>Hi!</h2>";
$text["en"]["main_welcome"]="
    <p>Need access to your <b>private server</b> at home <b>from Internet?</b> Or do you want to see the surveillance cameras in your home? You may prefer to <b>access your personal media from anywhere</b> without having to carry a removable hard drive or hire (and paid...) a static IP, or have to confirm your email every month to keep the service ...</p>
    <br>
    <img src=\"" . $config["html_root"] . "/rs/img/coddns_schema.png\" alt='schema'/>
    <br>
    <p><b>That's why we're here!</b></p>
    <br>
    <p>With CODDNS you will always have a label through which you'll be able to <b>access your home network</b> without having to worrying about changes in the public IP address given for router from your ISP.</p>
    <p>Simply associates a label available your public IP address, install the IP updater and access your computer from anywhere on the Internet.</p>
    <br>
    <img src=\"" . $config["html_root"] . "/rs/img/coddns_schema1.png\" alt='schema'/>
    <br>
    <p><b>Welcome</b></p>
    <br>
    <hr>
";

/* DEUTSCH */
$text["de"]["main_title"]="<h2>Hallo!</h2>";
$text["de"]["main_welcome"]="
    <h2>Hallo!</h2>
    <p>Ben&ouml;tigen den Zugriff auf Ihre privaten Server zu Hause? Oder wollen Sie, um die &uuml;berwachungskameras in Ihrem Haus sehen? Sie k&ouml;nnen es vorziehen, Ihre Medien von &uuml;berall aus zugreifen, ohne eine Wechselfestplatte durchf&uuml;hren oder mieten Sie eine statische IP, oder m&uuml;ssen Sie Ihre E-Mail best&auml;tigen jeden Monat, um den Dienst zu halten...</p>
    <br>
    <img src=\"" . $config["html_root"] . "/rs/img/coddns_schema.png\" alt='schema'/>
    <br>
    <p><b>Das ist, was wir hier sind!</b></p>
    <br>
    <p>Sie k&ouml;nnen dieses Tool verwenden, um immer ein Etikett, &uuml;ber die mit Ihrem Heimnetzwerk, ohne sich Gedanken &uuml;ber &auml;nderungen der IP-Router zugreifen.</p>
    <p>Einfach verbindet ein Label verf&uuml;gbar Ihre IP-Adresse, installieren Sie den Updater und auf Ihrem Computer von &uuml;berall &uuml;ber das Internet.</p>
    <br>
    <img src=\"" . $config["html_root"] . "/rs/img/coddns_schema1.png\" alt='schema'/>
    <br>
    <p><b>Herzlich Willkommen</b></p>
    <br>
    <hr>
";
$text["de"]["main_reg"]    = "Sich eintragen";
$text["de"]["main_acc"]    = "Einloggen";
$text["de"]["ph_email"]    = "email";
$text["de"]["ph_pass"]     = "password";
$text["en"]["ph_cpass"]    = "confirm password";
$text["de"]["f_send"]      = "Send";
$text["de"]["label_cpass"] = "Confirm password:";
$text["de"]["remember"]    = "Did you forgot your password?";

?>

<!DOCTYPE html>

<html>

<head>
<style type="text/css">
    section img{
	    width: 50%;
	    min-width: 450px;
	    margin: 0 auto 15px;
	    display: block;
    }
	article {
		width: 80%;
		margin: 40px auto;
	}

</style>
</head>

<body>

<section style="margin-bottom: 20px; text-align: justify;">
<?php echo $text[$lan]["main_title"];?>
<article>
    <?php echo $text[$lan]["main_welcome"];?>
</article>
</section>
</body>
</html>
