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

require_once(dirname(__FILE__) . "/../include/config.php");
require_once(dirname(__FILE__) . "/../lib/db.php");
require_once(dirname(__FILE__) . "/../lib/util.php");
require_once(dirname(__FILE__) . "/../lib/coduser.php");

$auth_level_required = get_required_auth_level('adm','service','manager');
$user = new CODUser();
$user->check_auth_level($auth_level_required);
?>


<!DOCTYPE HTML>

<html>
<head>
<link rel="stylesheet" type="text/css" href="<?php echo $config["html_root"];?>/rs/css/pc/tabs.css">
<link rel="stylesheet" type="text/css" href="<?php echo $config["html_root"];?>/rs/css/pc/service_manager.css" />

<script type="text/javascript">
	function mark(id){
		document.getElementById("s0").className="";
		document.getElementById("s1").className="";
		id.className = "selected";
	}
</script>
</head>

<body>
	<section>
		<h2>Administraci&oacute;n del servicio</h2>
		<nav>
			<a id="s0" class="" onclick="mark(this);updateContent('adm_service_content','<?php echo $config["html_root"] . "/adm/service_status.php"?>');">
				Estado
			</a>

			<a id="s1" class="" onclick="mark(this);updateContent('adm_service_content','<?php echo $config["html_root"] . "/adm/service.php"?>');">
				Servidores
			</a>
		</nav>

		<div id="adm_service_content" class="content">
		</div>

	</section>
</body>

</html>
