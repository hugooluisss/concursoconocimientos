$(document).ready(function(){
	$('#winEstudiantes').on('show.bs.modal', function (e) {
		$("#winAgregar").modal("hide");
	});
	
	$("#winAgregar").on('shown.bs.modal', function(e){
		$("#txtMatricula").focus();
	});
	
	$('#winEstudiantes').on('hide.bs.modal', function (e) {
		$("#winAgregar").modal("show");
	});
	
	$("#btnAgregar").click(function(){
		$("#winAgregar").modal();
	});
	
	$("#btnBuscarEstudiante").click(function(){
		$("#winEstudiantes").modal("show");
	});
	
	$("#tblEstudiantes").DataTable({
		"responsive": true,
		"language": espaniol,
		"paging": true,
		"lengthChange": false,
		"ordering": true,
		"info": true,
		"autoWidth": false
	});
	
	$("#tblInscritos").DataTable({
		"responsive": true,
		"language": espaniol,
		"paging": true,
		"lengthChange": false,
		"ordering": true,
		"info": true,
		"autoWidth": false
	});
	
	$('#winEstudiantes').find("[action=seleccionar]").click(function(){
		var el = jQuery.parseJSON($(this).attr("datos"));
		
		var form = $("#frmAddInscrito");
		
		form.find("#txtNombre").val(el.nombre).prop("disabled", true);
		form.find("#txtApp").val(el.app).prop("disabled", true);
		form.find("#txtApm").val(el.apm).prop("disabled", true);
		form.find("#selSexo").val(el.sexo == 'M'?'H':'M').prop("disabled", true);
		form.find("#txtMatricula").val(el.matricula).prop("disabled", true);
		form.find("#selSemestre").val(el.semestre).prop("disabled", true);
		
		$('#winEstudiantes').modal("hide");
		
		$('#winEstudiantes').find("selDisciplina").focus();
		
		setDisciplinas();
	});
	
	$("#selSemestre").change(function(){
		setDisciplinas();
	});
	
	function setDisciplinas(){
		var sem = $("#selSemestre").val();
		$("#selDisciplina").find("option").each(function(){
			$(this).prop("disabled", false);
		});
		$("#selDisciplina").find("option").each(function(){
			var el = $(this);
			
			$.each(el.attr("excluye").split(","), function(index, value){
				if (sem == value)
					el.prop("disabled", true);
			});
		});
	}
	
	$("#txtTelefono").inputmask("(99) 999 99 99999");
	$("#txtMatricula").inputmask("99IB999999");
	
	$("#frmAddInscrito").validate({
		debug: false,
		rules: {
			txtMatricula: "required",
			txtNombre: "required",
			txtApp: "required",
			txtApm: "required",
			selDisciplina: "required",
			chkAutorizacion: "required",
			txtCorreo: {
				required: true,
				email: true
			},
			txtCorreoAlternativo: {
				required: true,
				email: true
			},
			txtRespNombre: "required",
			txtRespApp: "required",
			txtRespApm: "required",
			txtTelefono: "required"
		},
		wrapper: 'span', 
		submitHandler: function(form){
			var obj = new TParticipante;
			obj.add(
				$("#selDisciplina").val(), 
				$("#txtNombre").val(), 
				$("#txtApp").val(),
				$("#txtApm").val(),
				$("#selSexo").val(),
				$("#selSemestre").val(),
				$("#txtRespNombre").val(),
				$("#txtRespApp").val(),
				$("#txtRespApm").val(),
				$("#txtCorreo").val(),
				$("#txtCorreoAlternativo").val(),
				$("#txtTelefono").val(),
				{
					before: function(){
						$(form).find("[type=submit]").prop("disabled", true);
					},
					after: function(datos){
						$(form).find("[type=submit]").prop("disabled", false);
						if (datos.band){
							getLista();
							
							$("#frmAddInscrito").get(0).reset();
							$("#selSemestre").val(1);
							setDisciplinas();
						}else{
							alert("Upps... No se pudo guardar");
						}
					}
				}
			);
        }

    });	
	
});