<?php /* Smarty version Smarty-3.1.11, created on 2016-09-01 09:53:06
         compiled from "templates/plantillas/modulos/plantel/winEstudiantes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:177534221757c838586ba101-98057046%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ebf4d4ee4c682cf2b9789266b7644bf570682205' => 
    array (
      0 => 'templates/plantillas/modulos/plantel/winEstudiantes.tpl',
      1 => 1472741578,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '177534221757c838586ba101-98057046',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_57c838586c2356_71039529',
  'variables' => 
  array (
    'estudiantes' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c838586c2356_71039529')) {function content_57c838586c2356_71039529($_smarty_tpl) {?><div class="modal fade" id="winEstudiantes" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h1>Lista de estudiantes inscritos</h1>
			</div>
			<div class="modal-body">
				<table id="tblEstudiantes" class="table table-bordered table-hover">
					<thead>
						<tr>
							<th>Matrícula</th>
							<th>Nombre</th>
							<th>Sem</th>
							<th>&nbsp;</th>
						</tr>
					</thead>
					<tbody>
						<?php  $_smarty_tpl->tpl_vars["row"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["row"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['estudiantes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["row"]->key => $_smarty_tpl->tpl_vars["row"]->value){
$_smarty_tpl->tpl_vars["row"]->_loop = true;
?>
							<tr>
								<td><?php echo $_smarty_tpl->tpl_vars['row']->value['matricula'];?>
</td>
								<td><?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
 <?php echo $_smarty_tpl->tpl_vars['row']->value['app'];?>
 <?php echo $_smarty_tpl->tpl_vars['row']->value['apm'];?>
</td>
								<td><?php echo $_smarty_tpl->tpl_vars['row']->value['semestre'];?>
</td>
								<td class="text-right">
									<button type="button" class="btn btn-default" action="seleccionar" title="Seleccionar estudiante" datos='<?php echo $_smarty_tpl->tpl_vars['row']->value['json'];?>
'><i class="fa fa-hand-paper-o" aria-hidden="true"></i></button>
								</td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div><?php }} ?>