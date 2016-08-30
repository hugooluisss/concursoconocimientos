TConcurso = function(){
	var self = this;
	
	this.add = function(id, nombre, descripcion, estado, periodo, fn){
		if (fn.before !== undefined) fn.before();
		
		$.post('cconcursos', {
				"id": id, 
				"nombre": nombre,
				"descripcion": descripcion,
				"estado": estado,
				"periodo": periodo,
				"action": "guardar"
			}, function(data){
				if (data.band == 'false')
					console.log("No se pudo guardar el curso");
					
				if (fn.after !== undefined)
					fn.after(data);
			}, "json");
	};
	
	this.del = function(id, fn){
		if (fn.before !== undefined) fn.before();
		
		$.post('cconcursos', {
			"id": id,
			"action": "del"
		}, function(data){
			if (fn.after != undefined)
				fn.after(data);
			if (data.band == 'false'){
				console.log("Ocurrió un error al eliminar el curso");
			}
		}, "json");
	};
};