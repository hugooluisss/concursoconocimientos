<?php /* Smarty version Smarty-3.1.11, created on 2016-09-02 12:05:04
         compiled from "templates/plantillas/modulos/plantel/winAgregar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:62010027657c6fa577f4a94-99273110%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5c065e872e22485875f95474d63d8b908b191b81' => 
    array (
      0 => 'templates/plantillas/modulos/plantel/winAgregar.tpl',
      1 => 1472834624,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '62010027657c6fa577f4a94-99273110',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_57c6fa577f5e97_83317069',
  'variables' => 
  array (
    'disciplinas' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c6fa577f5e97_83317069')) {function content_57c6fa577f5e97_83317069($_smarty_tpl) {?><div class="modal fade" id="winAgregar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h1>Agregar estudiante</h1>
			</div>
			<div class="modal-body">
				<form role="form" id="frmAddInscrito" class="form-horizontal" onsubmit="javascript: return false;">	
					<div class="form-group">
						<label for="txtMatricula" class="col-lg-2">Matrícula</label>
						<div class="col-lg-3">
							<input class="form-control" id="txtMatricula" name="txtMatricula">
						</div>
						<div class="col-lg-1">
							<button class="btn btn-default" title="Buscar estudiantes en el SIGEI" id="btnBuscarEstudiante"><i class="fa fa-search" aria-hidden="true"></i></button>
						</div>
					</div>
					<div class="form-group">
						<label for="txtNombre" class="col-lg-2">Nombre</label>
						<div class="col-lg-4">
							<input class="form-control" id="txtNombre" name="txtNombre" placeholder="Nombre">
						</div>
						<div class="col-lg-3">
							<input class="form-control" id="txtApp" name="txtApp" placeholder="Apellido paterno">
						</div>
						<div class="col-lg-3">
							<input class="form-control" id="txtApm" name="txtApm" placeholder="Apellido materno">
						</div>
					</div>
					<div class="form-group">
						<label for="selSemestre" class="col-lg-2">Sexo</label>
						<div class="col-lg-3">
							<select class="form-control" id="selSexo" name="selSexo">
								<option value="H">Hombre</option>
								<option value="M">Mujer</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label for="selSemestre" class="col-lg-2">Semestre</label>
						<div class="col-lg-3">
							<select class="form-control" id="selSemestre" name="selSemestre">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label for="selDisciplina" class="col-lg-2">Disciplina</label>
						<div class="col-lg-6">
							<select class="form-control" id="selDisciplina" name="selDisciplina">
								<?php  $_smarty_tpl->tpl_vars["row"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["row"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['disciplinas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["row"]->key => $_smarty_tpl->tpl_vars["row"]->value){
$_smarty_tpl->tpl_vars["row"]->_loop = true;
?>
									<option value="<?php echo $_smarty_tpl->tpl_vars['row']->value['idDisciplina'];?>
" excluye="<?php echo $_smarty_tpl->tpl_vars['row']->value['excluye'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
</option>
								<?php } ?>
							</select>
						</div>
					</div>
					
					<div class="form-group">
						<div class="checkbox col-lg-offset-2 col-lg-10">
							<input type="checkbox" value="" id="chkAutorizacion" name="chkAutorizacion"> <label for="chkAutorizacion">El estudiante ha dado su autorización para participar en el concurso de conocimientos</label>
						</div>
					</div>
					
					<br />
					<h3>Responsable</h3>
					<div class="form-group">
						<label for="txtRespNombre" class="col-lg-2">Nombre</label>
						<div class="col-lg-4">
							<input class="form-control" id="txtRespNombre" name="txtRespNombre" placeholder="Nombre">
						</div>
						<div class="col-lg-3">
							<input class="form-control" id="txtRespApp" name="txtRespApp" placeholder="Apellido paterno">
						</div>
						<div class="col-lg-3">
							<input class="form-control" id="txtRespApm" name="txtRespApm" placeholder="Apellido materno">
						</div>
					</div>
					<div class="form-group">
						<label for="txtCorreoAlternativo" class="col-lg-2">Correo</label>
						<div class="col-lg-4">
							<input class="form-control" id="txtCorreo" name="txtCorreo" placeholder="Principal">
						</div>
						<div class="col-lg-4">
							<input class="form-control" id="txtCorreoAlternativo" name="txtCorreoAlternativo" placeholder="Alternativo">
						</div>
					</div>
					<div class="form-group">
						<label for="txtTelefono" class="col-lg-2">Teléfono</label>
						<div class="col-lg-4">
							<input class="form-control" id="txtTelefono" name="txtTelefono">
						</div>
					</div>
					<button type="reset" id="btnReset" class="btn btn-default">Cancelar</button>
					<button type="submit" class="btn btn-info pull-right">Guardar</button>
					<input type="hidden" id="id"/>
				</form>
			</div>
		</div>
	</div>
</div><?php }} ?>