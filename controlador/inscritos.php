<?php
global $objModulo;
$db = TBase::conectaDB();
$rs = $db->Execute("select idConcurso from concurso where estado = 1 order by idConcurso desc");

$objConcurso = new TConcurso($rs->fields['idConcurso']);
switch($objModulo->getId()){
	case 'inscribir':
		$smarty->assign("concurso", $objConcurso);
		
		$rs = $db->Execute("select * from disciplina where idConcurso = ".$objConcurso->getId());
		$datos = array();
		while(!$rs->EOF){
			$rs2 = $db->Execute("select * from excluye where idDisciplina = ".$rs->fields['idDisciplina']);
			$excluye = array();
			while(!$rs2->EOF){
				$rs->fields['excluye'] .= $rs2->fields['semestre'].',';
				$rs2->moveNext();
			}
			
			array_push($datos, $rs->fields);
			$rs->moveNext();
		}
		
		$smarty->assign("disciplinas", $datos);
		
		$db = TBase::conectaDB("sigei");
		$rsPeriodo = $db->Execute("select idPeriodo, concat(anio, tipo) as periodo from periodo order by anio desc, tipo desc limit 2;");
		$rsPeriodo->moveNext();
		
		$rs = $db->Execute("select idEstudiante, matricula, sexo, nombre, app, apm, semestre from estudiante a join inscripcion b using(idEstudiante) where idPlantel = ".$userSesion->plantel->getId()." and idPeriodo = ".$rsPeriodo->fields['idPeriodo']);
		
		$datos = array();
		while(!$rs->EOF){
			$rs->fields["json"] = json_encode($rs->fields);
			array_push($datos, $rs->fields);
			$rs->moveNext();
		}
		
		$smarty->assign("estudiantes", $datos);
	break;
	case 'cincripciones':
		switch($objModulo->getAction()){
			case 'add':
				$obj = new TParticipante;
				
				$obj->plantel->setId($userSesion->plantel->getId());
				$obj->setDisciplina($_POST['disciplina']);
				$obj->setNombre($_POST['nombre']);
				$obj->setApp($_POST['app']);
				$obj->setApm($_POST['apm']);
				$obj->setSexo($_POST['sexo']);
				$obj->setSemestre($_POST['semestre']);
				$obj->setNombreResponsable($_POST['nombreresponsable']);
				$obj->setAppResponsable($_POST['appresponsable']);
				$obj->setApmResponsable($_POST['apmresponsable']);
				$obj->setEmail($_POST['email']);
				$obj->setEmailAlternativo($_POST['emailalternativo']);
				$obj->setTelefono($_POST['telefono']);
				
				echo json_encode(array("band" => $obj->guardar()));
			break;
			case 'del':
				$obj = new TParticipante($_POST['id']);
				
				echo json_encode(array("band" => $obj->eliminar()));
			break;
		}
	break;
}
?>