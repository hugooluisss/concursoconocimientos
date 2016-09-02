TParticipante = function(){
	var self = this;
	
	this.guardar = function(disciplina, nombre, app, apm, sexo, semestre, nombreResp, appResp, apmResp, correo, correoAlternativo, telefono, fn){
		if (fn.before != undefined)
			fn.before();
					
		$.post('cinscripciones', {
				"disciplina": disciplina,
				"nombre": nombre,
				"app": app,
				"apm": apm,
				"sexo": sexo,
				"semestre": semestre,
				"nombreresponsable": nombreResp,
				"appresponsable": appResp,
				"apmresponsable": apmResp,
				"correo": correo,
				"correoalternativo": correoAlternativo,
				"action": "guardar",
			}, function(data){
				if (data.band == 'false')
					console.log("Error al guardar el estado " + data.mensaje);
					
				if (fn.after != undefined)
					fn.after(data);
			}, "json");
	};
};