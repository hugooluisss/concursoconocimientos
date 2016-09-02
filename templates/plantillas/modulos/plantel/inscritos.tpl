<div class="row">
	<div class="col-md-12">
		<div class="alert alert-info">
			<b>Bienvenido {$PAGE.usuario->getNombreCompleto()}</b><br />
			<p>Integrante del plantel {$PAGE.usuario->getIdPlantel()} {$PAGE.usuario->getNombrePlantel()}</p>
			
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		Estás en la etapa de registro de estudiantes del concurso de conocimientos {$concurso->getPeriodo()}
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
				{foreach from=$inscritos item="row"}
					<tr>
						<td>{$row.matricula}</td>
						<td>{$row.nombre} {$row.app} {$row.apm}</td>
						<td class="text-right">
							<button type="button" class="btn btn-default" action="denegar" title="Negar semestres" datos='{$row.json}'><i class="fa fa-hand-paper-o" aria-hidden="true"></i></button>
						</td>
					</tr>
				{/foreach}
			</tbody>
		</table>
	</div>
</div>

{include file=$PAGE.rutaModulos|cat:"modulos/plantel/winAgregar.tpl"}
{include file=$PAGE.rutaModulos|cat:"modulos/plantel/winEstudiantes.tpl"}