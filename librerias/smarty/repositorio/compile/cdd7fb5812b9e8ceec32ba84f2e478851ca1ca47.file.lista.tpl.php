<?php /* Smarty version Smarty-3.1.11, created on 2016-08-29 08:53:37
         compiled from "templates/plantillas/modulos/disciplinas/lista.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9525205257b5ce91602411-88085509%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cdd7fb5812b9e8ceec32ba84f2e478851ca1ca47' => 
    array (
      0 => 'templates/plantillas/modulos/disciplinas/lista.tpl',
      1 => 1472478813,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9525205257b5ce91602411-88085509',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_57b5ce9162d320_61857030',
  'variables' => 
  array (
    'lista' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57b5ce9162d320_61857030')) {function content_57b5ce9162d320_61857030($_smarty_tpl) {?><table id="tblDatos" class="table table-bordered table-hover">
	<thead>
		<tr>
			<th>#</th>
			<th>Nombre</th>
			<th>&nbsp;</th>
		</tr>
	</thead>
	<tbody>
		<?php  $_smarty_tpl->tpl_vars["row"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["row"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["row"]->key => $_smarty_tpl->tpl_vars["row"]->value){
$_smarty_tpl->tpl_vars["row"]->_loop = true;
?>
			<tr>
				<td><?php echo $_smarty_tpl->tpl_vars['row']->value['idDisciplina'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
</td>
				<td class="text-right">
					<button type="button" class="btn btn-default" action="denegar" title="Negar semestres" datos='<?php echo $_smarty_tpl->tpl_vars['row']->value['json'];?>
'><i class="fa fa-hand-paper-o" aria-hidden="true"></i>
</button>
					<button type="button" class="btn btn-success" action="modificar" title="Modificar" datos='<?php echo $_smarty_tpl->tpl_vars['row']->value['json'];?>
'><i class="fa fa-pencil"></i></button>
					<button type="button" class="btn btn-danger" action="eliminar" title="Eliminar" identificador="<?php echo $_smarty_tpl->tpl_vars['row']->value['idDisciplina'];?>
"><i class="fa fa-times"></i></button>
				</td>
			</tr>
		<?php } ?>
	</tbody>
</table><?php }} ?>