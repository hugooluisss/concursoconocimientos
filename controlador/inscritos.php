<?php
global $objModulo;
$db = TBase::conectaDB();
$rs = $db->Execute("select idConcurso from concurso where estado = 1 order by idConcurso desc");

$objConcurso = new TConcurso($rs->fields['idCurso']);
switch($objModulo->getId()){
	case 'inscribir':
		$smarty->assign("concurso", $objConcurso);
	break;
}
?>