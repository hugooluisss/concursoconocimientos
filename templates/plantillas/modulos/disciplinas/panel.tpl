<div class="modal fade" id="winDisciplinas" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
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
</div>