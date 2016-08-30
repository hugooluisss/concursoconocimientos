TDisciplina = function(){
	var self = this;
	
	this.add = function(id, curso, nombre, fn){
		if (fn.before !== undefined) fn.before();
		
		$.post('cdisciplinas', {
				"id": id, 
				"nombre": nombre,
				"curso": curso,
				"action": "guardar"
			}, function(data){
				if (data.band == 'false')
					console.log("No se pudo guardar la disciplina");
					
				if (fn.after !== undefined)
					fn.after(data);
			}, "json");
	};
	
	this.del = function(id, fn){
		$.post('cdisciplinas', {
			"id": id,
			"action": "del"
		}, function(data){
			if (fn.after != undefined)
				fn.after(data);
			if (data.band == 'false'){
				console.log("Ocurrió un error al eliminar la disciplina");
			}
		}, "json");
	};
	
	this.setSemestres = function(disciplina, semestre, negar, fn){
		if (fn.before !== undefined) fn.before();
		
		$.post('cdisciplinas', {
			"id": disciplina, 
			"semestre": semestre,
			"negar": negar,
			"action": "bloqueo"
		}, function(data){
			if (data.band == 'false')
				console.log("No se pudo realizar la acción");
				
			if (fn.after !== undefined)
				fn.after(data);
				
		}, "json");
	}
};