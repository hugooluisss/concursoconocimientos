<?php
global $objModulo;
switch($objModulo->getId()){
	case 'listaEstados':
		$db = TBase::conectaDB();
		
		$rs = $db->Execute("select * from estado");
		$datos = array();
		while(!$rs->EOF){
			array_push($datos, $rs->fields);
			$rs->moveNext();
		}
		$smarty->assign("lista", $datos);
	break;
	case 'cestados':
		switch($objModulo->getAction()){
			case 'guardar':
				$obj = new TEstado($_POST['id']);
				
				echo json_encode(array("band" => $obj->setColor($_POST['color'])));
			break;
		}
	break;
}
?>