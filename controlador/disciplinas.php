<?php
global $objModulo;
switch($objModulo->getId()){
	case 'listaDisciplinas':
		$db = TBase::conectaDB();
		
		$rs = $db->Execute("select * from disciplina where idConcurso = ".$_POST['concurso']);
		$datos = array();
		while(!$rs->EOF){
			$rs2 = $db->Execute("select * from excluye where idDisciplina = ".$rs->fields['idDisciplina']);
			$excluye = array();
			while(!$rs2->EOF){
				array_push($excluye, $rs2->fields['semestre']);
				$rs2->moveNext();
			}
			
			$rs->fields['semestres'] = $excluye;
			
			$rs->fields['json'] = json_encode($rs->fields);
			array_push($datos, $rs->fields);
			$rs->moveNext();
		}
		$smarty->assign("lista", $datos);
	break;
	case 'cdisciplinas':
		switch($objModulo->getAction()){
			case 'guardar':
				$obj = new TDisciplina($_POST['id']);
				
				$obj->setNombre($_POST['nombre']);
				
				echo json_encode(array("band" => $obj->guardar($_POST['concurso'])));
			break;
			case 'del':
				$obj = new TDisciplina($_POST['id']);
				echo json_encode(array("band" => $obj->eliminar()));
			break;
			case 'bloqueo':
				$obj = new TDisciplina($_POST['id']);
				if ($_POST['negar'] == 'true')
					$band = $obj->negarSemestre($_POST['semestre']);
				else
					$band = $obj->permitirSemestre($_POST['semestre']);
					
				echo json_encode(array("band" => $band));
			break;
		}
	break;
}
?>