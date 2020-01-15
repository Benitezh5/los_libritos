function validarlibro(){
	var isbn =$('#isbn').val();
	var nombre =$('#nombre').val();
	var fecha_prestamo =$('#fecha_prestamo').val();
	var fecha_entrega =$('#fecha_entrega').val();
	var estado =$('#estado').val();
	var genero =$('#genero').val();
	var autores =$('#autores').val();
	var pais =$('#pais').val();
	var editorial =$('#editorial').val();

	if(isbn.length==0){
		$('#isbn').css("boxShadow", "0px 0px 15px red");
		$('#isbn').attr("placeholder", "campo requerido");
		return false;
	}else{
			$('#isbn').css("boxShadow", "0px 0px 15px green");
	}

		if(nombre.length==0){
		$('#nombre').css("boxShadow", "0px 0px 15px red");
		$('#nombre').attr("placeholder", "campo requerido");
		return false;
	}else{
			$('#nombre').css("boxShadow", "0px 0px 15px green");
	}


		if(fecha_prestamo.length==0){
		$('#fecha_prestamo').css("boxShadow", "0px 0px 15px red");
		$('#fecha_prestamo').attr("placeholder", "campo requerido");
		return false;
	}else{
			$('#fecha_prestamo').css("boxShadow", "0px 0px 15px green");
	}


		if(fecha_entrega.length==0){
		$('#fecha_entrega').css("boxShadow", "0px 0px 15px red");
		$('#fecha_entrega').attr("placeholder", "campo requerido");
		return false;
	}else{
			$('#fecha_entrega').css("boxShadow", "0px 0px 15px green");
	}

		if(estado.length==0){
		$('#estado').css("boxShadow", "0px 0px 15px red");
		$('#estado').attr("placeholder", "campo requerido");
		return false;
	}else{
			$('#estado').css("boxShadow", "0px 0px 15px green");
	}

		if(genero.length==0){
		$('#genero').css("boxShadow", "0px 0px 15px red");
		$('#genero').attr("placeholder", "campo requerido");
		return false;
	}else{
			$('#genero').css("boxShadow", "0px 0px 15px green");
	}

		if(autores.length==0){
		$('#autores').css("boxShadow", "0px 0px 15px red");
		$('#autores').attr("placeholder", "campo requerido");
		return false;
	}else{
			$('#autores').css("boxShadow", "0px 0px 15px green");
	}

		if(pais.length==0){
		$('#pais').css("boxShadow", "0px 0px 15px red");
		$('#pais').attr("placeholder", "campo requerido");
		return false;
	}else{
			$('#pais').css("boxShadow", "0px 0px 15px green");
	}

		if(editorial.length==0){
		$('#editorial').css("boxShadow", "0px 0px 15px red");
		$('#editorial').attr("placeholder", "campo requerido");
		return false;
	}else{
			$('#editorial').css("boxShadow", "0px 0px 15px green");
	}

	return true;
}