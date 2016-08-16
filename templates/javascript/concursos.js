$(document).ready(function(){
	getLista();
	
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
		$.get("?mod=listaConcursos", function( data ) {
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
});