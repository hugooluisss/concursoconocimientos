<?php
global $objModulo;
switch($objModulo->getId()){
	case 'listaConcursos':
		$db = TBase::conectaDB();
		
		$rs = $db->Execute("select * from concurso");
		$datos = array();
		while(!$rs->EOF){
			$rs->fields['json'] = json_encode($rs->fields);
			array_push($datos, $rs->fields);
			$rs->moveNext();
		}
		$smarty->assign("lista", $datos);
	break;
	case 'cconcursos':
		switch($objModulo->getAction()){
			case 'guardar':
				$obj = new TConcurso($_POST['id']);
				
				$obj->setNombre($_POST['nombre']);
				$obj->setDescripcion($_POST['descripcion']);
				$obj->setEstado($_POST['estado']);
				$obj->setPeriodo($_POST['periodo']);
				
				echo json_encode(array("band" => $obj->guardar()));
			break;
			case 'del':
				$obj = new TConcurso($_POST['id']);
				echo json_encode(array("band" => $obj->eliminar()));
			break;
		}
	break;
}
?>