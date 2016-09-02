<div class="modal fade" id="winAgregar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
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
								{foreach from=$disciplinas item="row"}
									<option value="{$row.idDisciplina}" excluye="{$row.excluye}">{$row.nombre}</option>
								{/foreach}
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
</div>