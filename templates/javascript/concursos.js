$(document).ready(function(){
	getLista();
	var idConcurso;
	
	$("#panelTabs li a[href=#add]").click(function(){
		$("#frmAdd").get(0).reset();
		$("#id").val("");
		$("form:not(.filter) :input:visible:enabled:first").focus();
	});
	
	$("#btnReset").click(function(){
		$('#panelTabs a[href="#listas"]').tab('show');
	});
	
	$("#frmAdd").validate({
		debug: true,
		rules: {
			txtNombre: "required",
			txtDescripcion: "required",
			txtPeriodo: "required"
		},
		wrapper: 'span', 
		submitHandler: function(form){
			var obj = new TConcurso;
			obj.add(
				$("#id").val(), 
				$("#txtNombre").val(),
				$("#txtDescripcion").val(),
				$("#selEstado").val(),
				$("#txtPeriodo").val(),
				{
					before: function(){
						$(form).find("[type=submit]").prop("disabled", true);
					},
					after: function(resp){
						$(form).find("[type=submit]").prop("disabled", false);
						if (resp.band){
							getLista();
							$("#frmAdd").get(0).reset();
							$('#panelTabs a[href="#listas"]').tab('show');
						}else{
							alert("Upps... No se pudo guardar");
						}
					}
				}
			);
		}
	});
		
	function getLista(){
		$.get("listaConcursos", function( data ) {
			$("#dvLista").html(data);
			
			$("[action=eliminar]").click(function(){
				if(confirm("¿Seguro?")){
					var obj = new TConcurso;
					obj.del($(this).attr("identificador"), {
						after: function(data){
							getLista();
						}
					});
				}
			});
			
			$("[action=modificar]").click(function(){
				var el = jQuery.parseJSON($(this).attr("datos"));
				
				$("#id").val(el.idConcurso);
				$("#txtNombre").val(el.nombre);
				$("#txtDescripcion").val(el.descripcion);
				$("#selEstado").val(el.estado);
				$("#txtPeriodo").val(el.periodo);
				
				$('#panelTabs a[href="#add"]').tab('show');
			});
			
			$("[action=disciplinas]").click(function(){
				var el = jQuery.parseJSON($(this).attr("datos"));
				$("#winDisciplinas").modal();
				
				$("#winDisciplinas").find("#concurso").val(el.idConcurso);
				
				getListaDisciplinas(el.idConcurso);
			});
			
			$("#tblDatos").DataTable({
				"responsive": true,
				"language": espaniol,
				"paging": false,
				"lengthChange": false,
				"ordering": true,
				"info": true,
				"autoWidth": false
			});
		});
	};
	
	$("#frmAddDisciplina").validate({
		debug: true,
		rules: {
			txtNombre: "required",
		},
		wrapper: 'span', 
		submitHandler: function(form){
			var obj = new TDisciplina;
			obj.add(
				$(form).find("#id").val(), 
				$(form).find("#concurso").val(),
				$(form).find("#txtNombre").val(),
				{
					before: function(){
						$(form).find("[type=submit]").prop("disabled", true);
					},
					after: function(resp){
						$(form).find("[type=submit]").prop("disabled", false);
						if (resp.band){
							getListaDisciplinas($("#concurso").val());
							$("#frmAddDisciplina").find("#txtNombre").val("");
							$("#frmAddDisciplina").find("#concurso").val("");
						}else{
							alert("Upps... No se pudo guardar");
						}
					}
				}
			);
	    }
	});
	
	function getListaDisciplinas(concurso){
		idConcurso = concurso;
		$.post("listaDisciplinas", {"concurso": concurso}, function( data ) {
			$("#lstDisciplinas").html(data);
			
			$("#lstDisciplinas").find("[action=modificar]").click(function(){
				var el = jQuery.parseJSON($(this).attr("datos"));
				
				$("#winDisciplinas").find("#txtNombre").val(el.nombre);
				$("#winDisciplinas").find("#id").val(el.idDisciplina);
			});
			
			$("#lstDisciplinas").find("[action=denegar]").click(function(){
				var el = jQuery.parseJSON($(this).attr("datos"));
				$("#winNegar").find("#disciplina").val(el.idDisciplina);
				$("#winNegar").find("[type=checkbox]").prop("checked", 1);
				
				$.each(el.semestres, function(i, sem){
					$("#winNegar").find("[semestre=" + sem + "]").removeAttr("checked");
				});
				
				$("#winDisciplinas").modal("hide");
				$("#winNegar").modal();
			});
		});
	}
	
	$('#winNegar').on('hidden.bs.modal', function () {
		$("#winDisciplinas").modal("show");
		
        getListaDisciplinas(idConcurso);
    });
    
    
    $("#winNegar").find("[type=checkbox]").change(function(){
    	var el = $(this);
    	var disciplina = new TDisciplina;
    	
    	disciplina.setSemestres($("#winNegar").find("#disciplina").val(), el.attr("semestre"), !el.prop("checked"), {
    		before: function(){
	    		el.prop("disabled", true);
    		},
    		after: function(resp){
	    		el.prop("disabled", false);
	    		
	    		if(!resp.band){
		    		alert("No se puedo actualizar el semestre " + el.attr("semestre"));
	    		}
    		}
    	});
    });
});