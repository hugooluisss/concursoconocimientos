TEstado = function(){
	var self = this;
	
	this.guardar = function(id, color, fn){
		if (fn.before != undefined)
			fn.before();
					
		$.post('cestados', {
				"id": id,
				"color": color,
				"action": "guardar",
			}, function(data){
				if (data.band == 'false')
					console.log("Error al guardar el estado " + data.mensaje);
					
				if (fn.after != undefined)
					fn.after(data);
			}, "json");
	};
};