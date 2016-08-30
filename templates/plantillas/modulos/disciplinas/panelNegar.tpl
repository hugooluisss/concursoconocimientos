<div class="modal fade" id="winNegar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
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
</div>