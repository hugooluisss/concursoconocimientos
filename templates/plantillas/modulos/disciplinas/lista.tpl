<table id="tblDatos" class="table table-bordered table-hover">
	<thead>
		<tr>
			<th>#</th>
			<th>Nombre</th>
			<th>&nbsp;</th>
		</tr>
	</thead>
	<tbody>
		{foreach from=$lista item="row"}
			<tr>
				<td>{$row.idDisciplina}</td>
				<td>{$row.nombre}</td>
				<td class="text-right">
					<button type="button" class="btn btn-default" action="denegar" title="Negar semestres" datos='{$row.json}'><i class="fa fa-hand-paper-o" aria-hidden="true"></i>
</button>
					<button type="button" class="btn btn-success" action="modificar" title="Modificar" datos='{$row.json}'><i class="fa fa-pencil"></i></button>
					<button type="button" class="btn btn-danger" action="eliminar" title="Eliminar" identificador="{$row.idDisciplina}"><i class="fa fa-times"></i></button>
				</td>
			</tr>
		{/foreach}
	</tbody>
</table>