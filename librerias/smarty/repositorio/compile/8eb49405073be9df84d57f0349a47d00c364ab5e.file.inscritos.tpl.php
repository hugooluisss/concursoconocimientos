<?php /* Smarty version Smarty-3.1.11, created on 2016-09-01 09:37:13
         compiled from "templates/plantillas/modulos/plantel/inscritos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5761452857c59d730d6115-22379371%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8eb49405073be9df84d57f0349a47d00c364ab5e' => 
    array (
      0 => 'templates/plantillas/modulos/plantel/inscritos.tpl',
      1 => 1472740620,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5761452857c59d730d6115-22379371',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_57c59d730d6992_41305841',
  'variables' => 
  array (
    'PAGE' => 0,
    'concurso' => 0,
    'inscritos' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c59d730d6992_41305841')) {function content_57c59d730d6992_41305841($_smarty_tpl) {?><div class="row">
	<div class="col-md-12">
		<div class="alert alert-info">
			<b>Bienvenido <?php echo $_smarty_tpl->tpl_vars['PAGE']->value['usuario']->getNombreCompleto();?>
</b><br />
			<p>Integrante del plantel <?php echo $_smarty_tpl->tpl_vars['PAGE']->value['usuario']->getIdPlantel();?>
 <?php echo $_smarty_tpl->tpl_vars['PAGE']->value['usuario']->getNombrePlantel();?>
</p>
			
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		Estás en la etapa de registro de estudiantes del concurso de conocimientos <?php echo $_smarty_tpl->tpl_vars['concurso']->value->getPeriodo();?>

	</div>
</div>
<div class="row">
	<div class="col-md-12 text-right">
		<div class="btn-group">
			<button type="button" class="btn btn-primary" id="btnAgregar">Agregar estudiantes</button>
		</div>
	</div>
</div>

<div class="box">
	<div class="box-body">
		<table id="tblInscritos" class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>Matrícula</th>
					<th>Nombre</th>
					<th>Semestre</th>
					<th>Prom</th>
					<th>Estado</th>
					<th>&nbsp;</th>
				</tr>
			</thead>
			<tbody>
				<?php  $_smarty_tpl->tpl_vars["row"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["row"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['inscritos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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
						<td class="text-right">
							<button type="button" class="btn btn-default" action="denegar" title="Negar semestres" datos='<?php echo $_smarty_tpl->tpl_vars['row']->value['json'];?>
'><i class="fa fa-hand-paper-o" aria-hidden="true"></i></button>
						</td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</div>

<?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['PAGE']->value['rutaModulos']).("modulos/plantel/winAgregar.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['PAGE']->value['rutaModulos']).("modulos/plantel/winEstudiantes.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>