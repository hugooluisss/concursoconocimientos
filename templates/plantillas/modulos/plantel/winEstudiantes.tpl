<div class="modal fade" id="winEstudiantes" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
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
						{foreach from=$estudiantes item="row"}
							<tr>
								<td>{$row.matricula}</td>
								<td>{$row.nombre} {$row.app} {$row.apm}</td>
								<td>{$row.semestre}</td>
								<td class="text-right">
									<button type="button" class="btn btn-default" action="seleccionar" title="Seleccionar estudiante" datos='{$row.json}'><i class="fa fa-hand-paper-o" aria-hidden="true"></i></button>
								</td>
							</tr>
						{/foreach}
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>