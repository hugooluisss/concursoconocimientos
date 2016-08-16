<?php
/**
* TConcurso
* Concursos registrados
* @package aplicacion
* @autor Hugo Santiago hugo.santiago@iebo.edu.mx
**/
class TConcurso{
	private $idConcurso;
	private $nombre;
	private $descripcion;
	private $estado;
	private $periodo;
	
	/**
	* Constructor de la clase
	*
	* @autor Hugo
	* @access public
	* @param int $id identificador del objeto
	*/
	public function TConcurso($id = ''){
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
		$rs = $db->Execute("select * from concurso where idConcurso = ".$id);
		
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
		return $this->idConcurso;
	}
	
	/**
	* Establece el nombre
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor a asignar
	* @return boolean True si es que lo hizo
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
	* Establece la descripcion
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor a asignar
	* @return boolean True si es que lo hizo
	*/
	public function setDescripcion($val = ''){
		$this->descripcion = $val;
		
		return true;
	}
	
	/**
	* Retorna la descripcion
	*
	* @autor Hugo
	* @access public
	* @return string identificador
	*/
	public function getDescripcion(){
		return $this->descripcion;
	}
	
	/**
	* Establece el estado
	*
	* @autor Hugo
	* @access public
	* @param int $val Valor a asignar
	* @return boolean True si es que lo hizo
	*/
	public function setEstado($val = 1){
		$this->estado = $val;
		
		return true;
	}
	
	/**
	* Retorna el estado
	*
	* @autor Hugo
	* @access public
	* @return string identificador
	*/
	public function getEstado(){
		return $this->estado;
	}
	
	/**
	* Establece el periodo
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor a asignar
	* @return boolean True si es que lo hizo
	*/
	public function setPeriodo($val = ''){
		$this->periodo = $val;
		
		return true;
	}
	
	/**
	* Retorna el periodo
	*
	* @autor Hugo
	* @access public
	* @return string identificador
	*/
	public function getPeriodo(){
		return $this->periodo;
	}
	
	/**
	* Guarda los datos en la base de datos, si no existe un identificador entonces crea el objeto
	*
	* @autor Hugo
	* @access public
	* @return boolean True si se realizó sin problemas
	*/
	
	public function guardar(){
		$db = TBase::conectaDB();
		
		if ($this->getId() == ''){
			$rs = $db->Execute("INSERT INTO concurso(nombre) VALUES('".$this->getNombre()."');");
			if (!$rs) return false;
			
			$this->idConcurso = $db->Insert_ID();
		}
		
		if ($this->getId() == '')
			return false;
			
		$rs = $db->Execute("UPDATE concurso
			SET
				nombre = '".$this->getNombre()."',
				descripcion = '".$this->getDescripcion()."',
				estado = '".$this->getEstado()."',
				periodo = '".$this->getPeriodo()."'
			WHERE idConcurso = ".$this->getId());
			
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
		$rs = $db->Execute("delete from concurso where idConcurso = ".$this->getId());
		
		return $rs?true:false;
	}
}
?>