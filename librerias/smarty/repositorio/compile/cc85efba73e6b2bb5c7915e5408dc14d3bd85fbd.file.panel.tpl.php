<?php /* Smarty version Smarty-3.1.11, created on 2016-08-16 10:32:28
         compiled from "templates/plantillas/modulos/concursos/panel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:22683839857b3312ca85ad5-51593231%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cc85efba73e6b2bb5c7915e5408dc14d3bd85fbd' => 
    array (
      0 => 'templates/plantillas/modulos/concursos/panel.tpl',
      1 => 1471361536,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22683839857b3312ca85ad5-51593231',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_57b3312ca9fba3_63398101',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57b3312ca9fba3_63398101')) {function content_57b3312ca9fba3_63398101($_smarty_tpl) {?><div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Administración de concursos de conocimientos</h1>
	</div>
</div>

<ul id="panelTabs" class="nav nav-tabs">
  <li class="active"><a data-toggle="tab" href="#listas">Lista</a></li>
  <li><a data-toggle="tab" href="#add">Agregar o Modificar</a></li>
</ul>

<div class="tab-content">
	<div id="listas" class="tab-pane fade in active">
		<div id="dvLista">
			
		</div>
	</div>
	
	<div id="add" class="tab-pane fade">
		<form role="form" id="frmAdd" class="form-horizontal" onsubmit="javascript: return false;">
			<div class="box">
				<div class="box-body">			
					<div class="form-group">
						<label for="txtNombre" class="col-lg-2">Nombre</label>
						<div class="col-lg-3">
							<input class="form-control" id="txtNombre" name="txtNombre">
						</div>
					</div>
					<div class="form-group">
						<label for="txtDescripcion" class="col-lg-2">Descripción</label>
						<div class="col-lg-3">
							<input class="form-control" id="txtDescripcion" name="txtDescripcion">
						</div>
					</div>
					<div class="form-group">
						<label for="selEstado" class="col-lg-2">Estado</label>
						<div class="col-lg-3">
							<select class="form-control" id="selEstado" name="selEstado">
								<option value="1">Publicado
								<option value="0">No publicado
							</select>
						</div>
					</div>
					<div class="form-group">
						<label for="txtPeriodo" class="col-lg-2">Periodo</label>
						<div class="col-lg-3">
							<input class="form-control" id="txtPeriodo" name="txtPeriodo">
						</div>
					</div>
				</div>
				<div class="box-footer">
					<button type="reset" id="btnReset" class="btn btn-default">Cancelar</button>
					<button type="submit" class="btn btn-info pull-right">Guardar</button>
					<input type="hidden" id="id"/>
				</div>
			</div>
		</form>
	</div>
</div><?php }} ?>