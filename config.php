<?php
define('SISTEMA', 'Concurso de conocimiento - Panel Admin');
define('VERSION', 'v 1.0');
define('ALIAS', '');
define('AUTOR', 'Hugo Luis Santiago Altamirano');
define('EMAIL', 'hugooluisss@gmail.com');
define('EMAILSOPORTE', 'hugooluisss@gmail.com');
define('STATUS', 'En desarrollo');

define('LAYOUT_DEFECTO', 'layout/default.tpl');
define('LAYOUT_AJAX', 'layout/update.tpl');
define('LAYOUT_JSON', 'layout/json.tpl');
define('LAYOUT_PLANTEL', 'layout/usuarioPlantel.tpl');

#Login y su controlador
$conf['inicio'] = array(
	'descripcion' => '',
	'seguridad' => false,
	'js' => array('usuario.class.js'),
	'jsTemplate' => array('login.js'),
	'capa' => 'layout/login.tpl');

$conf['logout'] = array(
	'controlador' => 'login.php',
	#'vista' => 'usuarios/panel.tpl',
	'descripcion' => 'Salir del sistema',
	'seguridad' => false,
	'js' => array(),
	'capa' => LAYOUT_DEFECTO);
	
$conf['clogin'] = array(
	'controlador' => 'login.php',
	'descripcion' => 'Inicio de sesion',
	'seguridad' => false,
	'capa' => LAYOUT_AJAX);
	
$conf['bienvenida'] = array(
	'controlador' => 'usuarios.php',
	'vista' => 'usuarios/bienvenida.tpl',
	'descripcion' => 'Bienvenida al sistema',
	'seguridad' => true,
	'capa' => LAYOUT_DEFECTO);

$conf['admonUsuarios'] = array(
	'controlador' => 'usuarios.php',
	'vista' => 'usuarios/panel.tpl',
	'descripcion' => 'Administración de usuarios',
	'seguridad' => true,
	'js' => array('usuario.class.js'),
	'jsTemplate' => array('usuarios.js'),
	'capa' => LAYOUT_DEFECTO);

$conf['listaUsuarios'] = array(
	'controlador' => 'usuarios.php',
	'vista' => 'usuarios/lista.tpl',
	'descripcion' => 'Lista de usuarios',
	'seguridad' => true,
	'capa' => LAYOUT_AJAX);
	
$conf['cusuarios'] = array(
	'controlador' => 'usuarios.php',
	'descripcion' => 'Controlador de usuarios',
	'seguridad' => true,
	'capa' => LAYOUT_AJAX);
	
/*Datos de usuario desde el panel*/
$conf['usuarioDatosPersonales'] = array(
	'controlador' => 'usuarios.php',
	'vista' => 'usuarios/datosPersonales.tpl',
	'descripcion' => 'Cambiar datos personales',
	'seguridad' => true,
	'js' => array('usuario.class.js'),
	'jsTemplate' => array('datosUsuario.js'),
	'capa' => LAYOUT_DEFECTO);
	
$conf['admonUsuarios'] = array(
	'controlador' => 'usuarios.php',
	'vista' => 'usuarios/panel.tpl',
	'descripcion' => 'Administración de usuarios',
	'seguridad' => true,
	'js' => array('usuario.class.js'),
	'jsTemplate' => array('usuarios.js'),
	'capa' => LAYOUT_DEFECTO);
	
$conf['panelPrincipal'] = array(
	'controlador' => 'index.php',
	'vista' => 'inicio.tpl',
	'descripcion' => 'Vista del panel',
	'seguridad' => true,
	'js' => array(),
	'capa' => LAYOUT_DEFECTO);

/* Estados */
$conf['estados'] = array(
	'controlador' => 'estados.php',
	'vista' => 'estados/panel.tpl',
	'descripcion' => 'Vista del panel de estados',
	'seguridad' => true,
	'js' => array('estado.class.js'),
	'jsTemplate' => array('estados.js'),
	'capa' => LAYOUT_DEFECTO);
	
$conf['cestados'] = array(
	'controlador' => 'estados.php',
	'descripcion' => 'Controlador de estados',
	'seguridad' => true,
	'changeSlashes' => false,
	'capa' => LAYOUT_AJAX);
	
$conf['listaEstados'] = array(
	'controlador' => 'estados.php',
	'vista' => 'estados/lista.tpl',
	'descripcion' => 'Lista de estados',
	'seguridad' => true,
	'capa' => LAYOUT_AJAX);
	
/* Concurso de conocimientos */
$conf['concursos'] = array(
	'controlador' => 'concursos.php',
	'vista' => 'concursos/panel.tpl',
	'descripcion' => 'Vista del panel de concursos',
	'seguridad' => true,
	'js' => array('concurso.class.js', 'disciplina.class.js'),
	'jsTemplate' => array('concursos.js'),
	'capa' => LAYOUT_DEFECTO);
	
$conf['cconcursos'] = array(
	'controlador' => 'concursos.php',
	'descripcion' => 'Controlador de concursos',
	'seguridad' => true,
	'changeSlashes' => false,
	'capa' => LAYOUT_AJAX);
	
$conf['listaConcursos'] = array(
	'controlador' => 'concursos.php',
	'vista' => 'concursos/lista.tpl',
	'descripcion' => 'Lista de concursos',
	'seguridad' => true,
	'capa' => LAYOUT_AJAX);
	
$conf['listaDisciplinas'] = array(
	'controlador' => 'disciplinas.php',
	'vista' => 'disciplinas/lista.tpl',
	'descripcion' => 'Lista de disciplinas',
	'seguridad' => true,
	'capa' => LAYOUT_AJAX);
	
$conf['cdisciplinas'] = array(
	'controlador' => 'disciplinas.php',
	'descripcion' => 'Controlador de disciplinas',
	'seguridad' => true,
	'changeSlashes' => false,
	'capa' => LAYOUT_AJAX);
	
/************************************/
# Esto es para el usuario de plantel
/************************************/
$conf['inscribir'] = array(
	'controlador' => 'inscritos.php',
	'vista' => 'plantel/inscritos.tpl',
	'descripcion' => 'Estudiantes inscritos con su estado dentro del sistema',
	'seguridad' => true,
	'js' => array('participante.class.js'),
	'jsTemplate' => array('inscritos.js'),
	'capa' => LAYOUT_PLANTEL);

?>