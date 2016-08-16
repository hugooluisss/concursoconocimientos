<?php
/**
* TEstado
* Estados de un registro de participante
* @package aplicacion
* @autor Hugo Santiago hugo.santiago@iebo.edu.mx
**/
class TEstado{
	private $idEstado;
	private $nombre;
	private $color;
	
	/**
	* Constructor de la clase
	*
	* @autor Hugo
	* @access public
	* @param int $id identificador del objeto
	*/
	public function TEstado($id = ''){
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
		$rs = $db->Execute("select * from estado where idEstado = ".$id);
		
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
		return $this->idEstado;
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
	* Retorna el color
	*
	* @autor Hugo
	* @access public
	* @return string identificador
	*/
	public function getColor(){
		return $this->color;
	}
	
	/**
	* Establece el color del objeto
	*
	* @autor Hugo
	* @access public
	* @param string $id identificador del objeto
	* @return boolean True si se realizó sin problemas
	*/
	public function setColor($val = ''){
		if ($val == '') return false;
		if ($this->getId() == '') return false;
		
		$this->color = $val;
		$db = TBase::conectaDB();
		$rs = $db->Execute("update estado set color = '".$val."' where idEstado = ".$this->getId()."");
		
		return $rs?true:false;
	}
}
?>