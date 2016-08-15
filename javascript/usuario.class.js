TUsuario = function(){
	var self = this;
	
	this.login = function(usuario, pass, fn){
		if (fn.before !== undefined)
			fn.before();
			
		$.post('clogin', {
			"usuario": usuario,
			"pass": pass,
			"action": "login"
		}, function(data){
			if (fn.after != undefined)
				fn.after(data);
				
			if (data.band == 'false'){
				console.log("Los datos del usuario no son válidos");
			}
		}, "json");
	}
};