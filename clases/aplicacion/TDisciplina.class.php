<?php
/**
* TDisciplina
* Disciplina de un curso
* @package aplicacion
* @autor Hugo Santiago hugo.santiago@iebo.edu.mx
**/
class TDisciplina{
	private $idDisciplina;
	private $idConcurso;
	private $nombre;
	
	/**
	* Constructor de la clase
	*
	* @autor Hugo
	* @access public
	* @param int $id identificador del objeto
	*/
	public function TDisciplina($id = ''){
		$this->setId($id);
	}
	
	/**
	* Carga los datos del objeto
	*
	* @autor Hugo
	* @access public
	* @param int $id identificador del objeto
	* @return boolean True si se realizó sin problemas
	*/
	public function setId($id = ''){
		if ($id == '') return false;
		
		$db = TBase::conectaDB();
		$rs = $db->Execute("select * from disciplina where idDisciplina = ".$id);
		
		if ($rs->EOF) return false;
		foreach($rs->fields as $key => $val){
			$this->$key = $val;
		}
		
		return true;
	}
	
	/**
	* Retorna el identificador del objeto
	*
	* @autor Hugo
	* @access public
	* @return int identificador
	*/
	public function getId(){
		return $this->idDisciplina;
	}
	
	/**
	* Establece el nombre
	*
	* @autor Hugo
	* @access public
	* @param string $val valor
	* @return boolean True si se realizó sin problemas
	*/
	public function setNombre($val = ''){
		$this->nombre = $val;
		
		return true;
	}
	
	/**
	* Retorna el nombre
	*
	* @autor Hugo
	* @access public
	* @return string identificador
	*/
	public function getNombre(){
		return $this->nombre;
	}
	
	/**
	* Retorna el identificador del Concurso
	*
	* @autor Hugo
	* @access public
	* @return int identificador
	*/
	public function getConcurso(){
		return $this->idConcurso;
	}
	
	/**
	* Guarda los datos en la base de datos, si no existe un identificador entonces crea el objeto
	*
	* @autor Hugo
	* @access public
	* @param int $concurso $identificador del curso
	* @return boolean True si se realizó sin problemas
	*/
	
	public function guardar($concurso = ''){
		if ($this->getConcurso() == '') 
			if ($concurso == '')
				return false;
			else
				$this->idConcurso = $concurso;
		
				
		$db = TBase::conectaDB();
		
		if ($this->getId() == ''){
			$rs = $db->Execute("INSERT INTO disciplina(idCurso) VALUES('".$this->getConcurso()."');");
			if (!$rs) return false;
			
			$this->idDisciplina = $db->Insert_ID();
		}
		
		if ($this->getId() == '')
			return false;
			
		$rs = $db->Execute("UPDATE disciplina
			SET
				nombre = '".$this->getNombre()."'
			WHERE idDisciplina = ".$this->getId());
			
		return $rs?true:false;
	}
	
	/**
	* Elimina el objeto
	*
	* @autor Hugo
	* @access public
	* @return boolean True si se realizó sin problemas
	*/
	
	public function eliminar(){
		if ($this->getId() == '') return false;
		
		$db = TBase::conectaDB();
		$rs = $db->Execute("delete from disciplina where idDisciplina = ".$this->getId());
		
		return $rs?true:false;
	}
	
	/**
	* Niega la disciplina a los estudiantes del semestre
	*
	* @autor Hugo
	* @param int $sem Número de semestre
	* @access public
	* @return boolean True si se realizó sin problemas
	*/
	
	public function negarSemestre($sem = ''){
		if ($sem == '') return false;
		if ($this->getId() == '') return false;
		
		$db = TBase::conectaDB();
		$rs = $db->Execute("insert into excluye(idDisciplina, semestre) values(".$this->getId().", ".$sem.")");
		
		return $rs?true:false;
	}
	
	/**
	* permite la disciplina a los estudiantes del semestre
	*
	* @autor Hugo
	* @param int $sem Número de semestre
	* @access public
	* @return boolean True si se realizó sin problemas
	*/
	
	public function permitirSemestre($sem = ''){
		if ($sem == '') return false;
		if ($this->getId() == '') return false;
		
		$db = TBase::conectaDB();
		$rs = $db->Execute("delete from excluye where idDisciplina = ".$this->getId()." and semestre = ".$sem);
		
		return $rs?true:false;
	}
}
?>