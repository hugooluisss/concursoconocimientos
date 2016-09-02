<?php
/**
* TParticipante
* Participante de un curso
* @package aplicacion
* @autor Hugo Santiago hugo.santiago@iebo.edu.mx
**/
class TParticipante{
	private $idParticipante;
	private $idDisciplina;
	private $plantel;
	private $nombre;
	private $app;
	private $apm;
	private $sexo;
	private $semestre;
	private $respNombre;
	private $respApp;
	private $respApm;
	private $email;
	private $emailAlternativo;
	private $telefono;
	
	/**
	* Constructor de la clase
	*
	* @autor Hugo
	* @access public
	* @param int $id identificador del objeto
	*/
	public function TParticipante($id = ''){
		$this->plantel = new TPlantel;
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
		$rs = $db->Execute("select * from participante where idParticipante = ".$id);
		
		if ($rs->EOF) return false;
		foreach($rs->fields as $key => $val){
			switch($key){
				case 'idPlantel':
					$this->plantel = new TPlantel($val);
				break;
				default:
					$this->$key = $val;	
			}
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
		return $this->idParticipante;
	}
	
	/**
	* Establece la disciplina
	*
	* @autor Hugo
	* @access public
	* @param string $val valor
	* @return boolean True si se realizó sin problemas
	*/
	public function setDisciplina($val = ''){
		$this->idDisciplina = $val;
		
		return true;
	}
	
	/**
	* Retorna la disciplina
	*
	* @autor Hugo
	* @access public
	* @return string identificador
	*/
	public function getDisciplina(){
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
	* Establece el app
	*
	* @autor Hugo
	* @access public
	* @param string $val valor
	* @return boolean True si se realizó sin problemas
	*/
	public function setApp($val = ''){
		$this->app = $val;
		
		return true;
	}
	
	/**
	* Retorna el app
	*
	* @autor Hugo
	* @access public
	* @return string identificador
	*/
	public function getApp(){
		return $this->app;
	}
	
	/**
	* Establece el apm
	*
	* @autor Hugo
	* @access public
	* @param string $val valor
	* @return boolean True si se realizó sin problemas
	*/
	public function setApm($val = ''){
		$this->apm = $val;
		
		return true;
	}
	
	/**
	* Retorna el nombre
	*
	* @autor Hugo
	* @access public
	* @return string identificador
	*/
	public function getApm(){
		return $this->apm;
	}
	
	/**
	* Establece el sexo
	*
	* @autor Hugo
	* @access public
	* @param string $val valor
	* @return boolean True si se realizó sin problemas
	*/
	public function setSexo($val = ''){
		$this->sexo = $val;
		
		return true;
	}
	
	/**
	* Retorna el sexo
	*
	* @autor Hugo
	* @access public
	* @return string identificador
	*/
	public function getSexo(){
		return $this->sexo;
	}
	
	/**
	* Establece el semestre
	*
	* @autor Hugo
	* @access public
	* @param int $val valor
	* @return boolean True si se realizó sin problemas
	*/
	public function setSemestre($val = 0){
		$this->semestre = $val;
		
		return true;
	}
	
	/**
	* Retorna el semestre
	*
	* @autor Hugo
	* @access public
	* @return string identificador
	*/
	public function getSemestre(){
		return $this->semestre;
	}
	
	/**
	* Establece el nombre del responsable
	*
	* @autor Hugo
	* @access public
	* @param string $val valor
	* @return boolean True si se realizó sin problemas
	*/
	public function setNombreResponsable($val = ''){
		$this->respNombre = $val;
		
		return true;
	}
	
	/**
	* Retorna el nombre del responsable
	*
	* @autor Hugo
	* @access public
	* @return string identificador
	*/
	public function getNombreResponsable(){
		return $this->respNombre;
	}
	
	/**
	* Establece el app del responsable
	*
	* @autor Hugo
	* @access public
	* @param string $val valor
	* @return boolean True si se realizó sin problemas
	*/
	public function setAppResponsable($val = ''){
		$this->respApp = $val;
		
		return true;
	}
	
	/**
	* Retorna el app del responsable
	*
	* @autor Hugo
	* @access public
	* @return string identificador
	*/
	public function getAppResponsable(){
		return $this->respApp;
	}
	
	/**
	* Establece el apm del responsable
	*
	* @autor Hugo
	* @access public
	* @param string $val valor
	* @return boolean True si se realizó sin problemas
	*/
	public function setApmResponsable($val = ''){
		$this->respApm = $val;
		
		return true;
	}
	
	/**
	* Retorna el app del responsable
	*
	* @autor Hugo
	* @access public
	* @return string identificador
	*/
	public function getApmResponsable(){
		return $this->respApm;
	}
	
	/**
	* Establece el correo del responsable
	*
	* @autor Hugo
	* @access public
	* @param string $val valor
	* @return boolean True si se realizó sin problemas
	*/
	public function setCorreo($val = ''){
		$this->correo = $val;
		
		return true;
	}
	
	/**
	* Retorna el correo del responsable
	*
	* @autor Hugo
	* @access public
	* @return string identificador
	*/
	public function getCorreo(){
		return $this->correo;
	}
	
	/**
	* Establece el correo alternativo del responsable
	*
	* @autor Hugo
	* @access public
	* @param string $val valor
	* @return boolean True si se realizó sin problemas
	*/
	public function setCorreoAlternativo($val = ''){
		$this->correo = $val;
		
		return true;
	}
	
	/**
	* Retorna el correo alternativo del responsable
	*
	* @autor Hugo
	* @access public
	* @return string identificador
	*/
	public function getCorreoAlternativo(){
		return $this->correoAlternativo;
	}
	
	/**
	* Establece el telefono
	*
	* @autor Hugo
	* @access public
	* @param string $val valor
	* @return boolean True si se realizó sin problemas
	*/
	public function setTelefono($val = ''){
		$this->telefono = $val;
		
		return true;
	}
	
	/**
	* Retorna el telefono
	*
	* @autor Hugo
	* @access public
	* @return string identificador
	*/
	public function getTelefono(){
		return $this->telefono;
	}
	
	/**
	* Guarda los datos en la base de datos, si no existe un identificador entonces crea el objeto
	*
	* @autor Hugo
	* @access public
	* @param int $concurso $identificador del curso
	* @return boolean True si se realizó sin problemas
	*/
	
	public function guardar(){
		if ($this->plantel->getId() == '') return false;
		if ($this->getDisciplina() == '') return false;
				
		$db = TBase::conectaDB();
		
		if ($this->getId() == ''){
			$rs = $db->Execute("INSERT INTO participante(idDisciplina, idPlantel) VALUES(".$this->getDisciplina().", ".$this->plantel->getId().");");
			if (!$rs) return false;
			
			$this->idParticipante = $db->Insert_ID();
		}
		
		if ($this->getId() == '')
			return false;
			
		$rs = $db->Execute("UPDATE participante
			SET
				nombre = '".$this->getNombre()."',
				app = '".$this->getApp()."',
				apm = '".$this->getApm()."',
				sexo = '".$this->getSexo()."',
				semestre = '".$this->getSemestre()."',
				respNombre = '".$this->getNombreResponsable()."',
				respApp = '".$this->getAppResponsable()."',
				respApm = '".$this->getApmResponsable()."',
				email = '".$this->getEmail()."',
				emailAlternativo = '".$this->getEmailAlternativo()."',
				telefono = '".$this->getTelefono()."'
			WHERE idParticipante = ".$this->getId());
			
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
		$rs = $db->Execute("delete from participante where idParticipante = ".$this->getId());
		
		return $rs?true:false;
	}
}
?>