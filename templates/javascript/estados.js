$(document).ready(function(){
	getLista();
	
	function getLista(){
		$.get("?mod=listaEstados", function( data ) {
			$("#dvLista").html(data);
			
			$(".color").colorpicker().on('hidePicker', function(e){
				var obj = new TEstado;
				var el = $(this);
				obj.guardar(el.attr("identificador"), el.val(), {
					before: function(){
						el.prop("disabled", true);
					},
					after: function(resp){
						el.prop("disabled", false);
						if (!resp.band)
							alert("Ocurrio un error al actualizar el color");
					}
				});
			});
			
			$("#tblDatos").DataTable({
				"responsive": true,
				"language": espaniol,
				"paging": true,
				"lengthChange": false,
				"ordering": true,
				"info": true,
				"autoWidth": false
			});
		});
	}
});