<?php /* Smarty version Smarty-3.1.11, created on 2016-08-16 08:35:58
         compiled from "templates/plantillas/modulos/usuarios/panel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:77669690157ae04b9cce1f1-22894914%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '75fca16c9665563fbe115b9d9483a90d1409c54e' => 
    array (
      0 => 'templates/plantillas/modulos/usuarios/panel.tpl',
      1 => 1471354556,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '77669690157ae04b9cce1f1-22894914',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_57ae04b9d4eee0_79712837',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ae04b9d4eee0_79712837')) {function content_57ae04b9d4eee0_79712837($_smarty_tpl) {?><div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Administración de usuarios</h1>
	</div>
</div>

<div class="box">
	<div class="box-header">
		<h3 class="box-title">Agregar trabajador</h3>
	</div>
	<div class="box-body">
		<div class="col-lg-2">
			<label for="txtTrabajador" class="control-label">Agregar trabajador</label>
		</div>
		<div class="col-lg-8">
			<input class="form-control" id="txtTrabajador" name="txtTrabajador" type="text" autocomplete="off" autofocus="true" value=""/>
		</div>
	</div>
</div>

<div id="dvLista">
</div><?php }} ?>