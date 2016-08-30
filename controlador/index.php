<?php
global $objModulo;
switch($objModulo->getId()){
	case 'panelPrincipal':
		global $userSesion;
		
		#como son de plantel se les presenta la pantalla de captura de datos
		if (in_array($userSesion->getNombrePlaza(), array("DIRECTOR DE PLANTEL", "ASESOR"))){
			echo '<script>location.href = "inscribir"</script>';
		}
	break;
}
?>