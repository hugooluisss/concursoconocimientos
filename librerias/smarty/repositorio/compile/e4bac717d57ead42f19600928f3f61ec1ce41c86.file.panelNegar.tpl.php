<?php /* Smarty version Smarty-3.1.11, created on 2016-08-29 10:18:19
         compiled from "templates/plantillas/modulos/disciplinas/panelNegar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:108956223757c4427e177165-06321043%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e4bac717d57ead42f19600928f3f61ec1ce41c86' => 
    array (
      0 => 'templates/plantillas/modulos/disciplinas/panelNegar.tpl',
      1 => 1472483668,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '108956223757c4427e177165-06321043',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_57c4427e178417_54990262',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c4427e178417_54990262')) {function content_57c4427e178417_54990262($_smarty_tpl) {?><div class="modal fade" id="winNegar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h1>Semestres permitidos</h1>
			</div>
			<div class="modal-body">
				<form role="form" id="frmNegar" class="form-horizontal" onsubmit="javascript: return false;">	
					<div class="checkbox">
						<label><input type="checkbox" id="neg1" name="neg1" semestre="1"> Primer Semestre </label><br />
					</div>
					<div class="checkbox">
						<label><input type="checkbox" id="neg2" name="neg2" semestre="2"> Segundo Semestre </label><br />
					</div>
					<div class="checkbox">
						<label><input type="checkbox" id="neg3" name="neg3" semestre="3"> Tercero Semestre </label><br />
					</div>
					<div class="checkbox">
						<label><input type="checkbox" id="neg4" name="neg4" semestre="4"> Cuarto Semestre </label><br />
					</div>
					<div class="checkbox">
						<label><input type="checkbox" id="neg5" name="neg5" semestre="5"> Quinto Semestre </label><br />
					</div>
					<div class="checkbox">
						<label><input type="checkbox" id="neg6" name="neg6" semestre="6"> Sexto Semestre </label><br />
					</div>
					
					<input type="hidden" id="disciplina" name="disciplina" value="" />
				</form>
			</div>
		</div>
	</div>
</div><?php }} ?>