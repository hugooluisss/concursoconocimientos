<?php /* Smarty version Smarty-3.1.11, created on 2016-08-18 10:23:54
         compiled from "templates/plantillas/modulos/disciplinas/panel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:173368145557b5cd4ad7e604-47185557%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9e4105c0be17ea41fdfcb75bba086cc1810baca6' => 
    array (
      0 => 'templates/plantillas/modulos/disciplinas/panel.tpl',
      1 => 1471533587,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '173368145557b5cd4ad7e604-47185557',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_57b5cd4ad7fba7_68304119',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57b5cd4ad7fba7_68304119')) {function content_57b5cd4ad7fba7_68304119($_smarty_tpl) {?><div class="modal fade" id="winDisciplinas" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h1>Disciplinas</h1>
			</div>
			<div class="modal-body">
				<form role="form" id="frmAddDisciplina" class="form-horizontal" onsubmit="javascript: return false;">	
					<div class="form-group">
						<label for="txtNombre" class="col-lg-2">Nombre</label>
						<div class="col-lg-8">
							<input class="form-control" id="txtNombre" name="txtNombre">
						</div>
					</div>
					<button type="reset" id="btnReset" class="btn btn-default">Cancelar</button>
					<button type="submit" class="btn btn-info pull-right">Guardar</button>
					<input type="hidden" id="id"/>
					<input type="hidden" id="concurso"/>
				</form>
				
				<div id="lstDisciplinas">
				</div>
			</div>
		</div>
	</div>
</div><?php }} ?>