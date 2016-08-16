<div class="box">
	<div class="box-body">
		<table id="tblDatos" class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>#</th>
					<th>Nombre</th>
					<th>Color</th>
				</tr>
			</thead>
			<tbody>
				{foreach from=$lista item="row"}
					<tr>
						<td style="border-left: 1px solid {$row.color}">{$row.idEstado}</td>
						<td>{$row.nombre}</td>
						<td class="text-right">
							<input type="text" class="form-control color" value="{$row.color}" identificador="{$row.idEstado}"/>
						</td>
					</tr>
				{/foreach}
			</tbody>
		</table>
	</div>
</div>