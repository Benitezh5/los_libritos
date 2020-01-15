<script >
	$(document).ready(function(){

		mostrarLibro();

		function mostrarLibro(){

			$.ajax({
				type: 'ajax',
				url: '<?= base_url("libroC/get_libro")?>',
				dataType: 'json',

				success: function(datos){
					var tabla=" ";
					var i;

					for(i=0; i<datos.length; i++){
						tabla+=
						'<tr>'+
						'<td>'+datos[i].isbn+'</td>'+ 
						'<td>'+datos[i].nombre+'</td>'+ 
						'<td>'+datos[i].fecha_prestamo+'</td>'+ 
						'<td>'+datos[i].fecha_entrega+'</td>'+ 
						'<td>'+datos[i].nombre_estado+'</td>'+ 
						'<td>'+datos[i].nombre_genero+'</td>'+ 
						'<td>'+datos[i].nombre_autores+'</td>'+ 
						'<td>'+datos[i].nombre_pais+'</td>'+ 
						'<td>'+datos[i].nombre_editorial+'</td>'+ 
						'<td>'+'<a href="javascript:;" class="btn btn-danger btn-sm borrar" data="'+datos[i].isbn+'">Eliminar</a>'+'</td>'+ 
						'<td>'+'<a href="javascript:;" class="btn btn-info btn-sm item-edi" data="'+datos[i].isbn+'">Editar</a>'+'</td>'+ 

						'</tr>';
					}
					$('#tabla_libro').html(tabla);
				}
			});
		}

		$('#tabla_libro').on("click", ".borrar", function(){
			$id=$(this).attr("data");
			$('#modalBorrar').modal("show");
			$('#btnBorrar').unbind().click(function(){

				$.ajax({
					type: 'ajax',
					method: 'post',
					url:  '<?= base_url("libroC/eliminar")?>',
					data:  {id:$id},
					dataType: 'json',

					success: function(respuesta){
						$('#modalBorrar').modal("hide");
						if(respuesta=true){
							alertify.notify("Eliminado Exitosamente!", "success", 10, null);
							mostrarLibro();
						}else{
							alertify.notify("Error al Eliminar!", "error", 10, null);
						}
					}
				});

			});


		});

		$('#nueLib').click(function(){
			$('#libro').modal("show");
			$('#libro').find(".modal-title").text("Nuevo Libro");
			$('#formLibro').attr("action", "<?= base_url('libroC/ingresar')?>");
		});

		get_estado();

		function get_estado(){
			$.ajax({
				type: 'ajax',
				url:  '<?= base_url("libroC/get_estado")?>',
				dataType: 'json',

				success: function(datos){
					var op=" ";
					var i;

					op+="<option value=''>--Seleccione estado--<option>";
					for(i=0; i<datos.length; i++){
						op+="<option value='"+datos[i].id_estado+"'>"+datos[i].nombre_estado+"</option>";
					}
					$('#estado').html(op);
				}


			});
		}

		get_genero();

		function get_genero(){
			$.ajax({
				type: 'ajax',
				url:  '<?= base_url("libroC/get_genero")?>',
				dataType: 'json',

				success: function(datos){
					var op=" ";
					var i;

					op+="<option value=''>--Seleccione genero--<option>";
					for(i=0; i<datos.length; i++){
						op+="<option value='"+datos[i].id_genero+"'>"+datos[i].nombre_genero+"</option>";
					}
					$('#genero').html(op);
				}


			});
		}

		get_autores();

		function get_autores(){
			$.ajax({
				type: 'ajax',
				url:  '<?= base_url("libroC/get_autores")?>',
				dataType: 'json',

				success: function(datos){
					var op=" ";
					var i;

					op+="<option value=''>--Seleccione estado--<option>";
					for(i=0; i<datos.length; i++){
						op+="<option value='"+datos[i].id_autores+"'>"+datos[i].nombre_autores+"</option>";
					}
					$('#autores').html(op);
				}


			});
		}

		get_pais();

		function get_pais(){
			$.ajax({
				type: 'ajax',
				url:  '<?= base_url("libroC/get_pais")?>',
				dataType: 'json',

				success: function(datos){
					var op=" ";
					var i;

					op+="<option value=''>--Seleccione pais--<option>";
					for(i=0; i<datos.length; i++){
						op+="<option value='"+datos[i].id_pais+"'>"+datos[i].nombre_pais+"</option>";
					}
					$('#pais').html(op);
				}


			});
		}

		get_editorial();

		function get_editorial(){
			$.ajax({
				type: 'ajax',
				url:  '<?= base_url("libroC/get_editorial")?>',
				dataType: 'json',

				success: function(datos){
					var op=" ";
					var i;

					op+="<option value=''>--Seleccione editorial--<option>";
					for(i=0; i<datos.length; i++){
						op+="<option value='"+datos[i].id_editorial+"'>"+datos[i].nombre_editorial+"</option>";
					}
					$('#editorial').html(op);
				}


			});
		}

		$('#btnGuardar').click(function(){
			$url = $('#formLibro').attr("action");
			$data= $('#formLibro').serialize();

			if(validarlibro()==true){
				$.ajax({
					type: 'ajax',
					method: 'post',
					url:  $url,
					data:  $data,
					dataType: 'json',

					success: function(respuesta){
						$('#libro').modal("hide");
						if(respuesta="add"){
							alertify.notify("Ingresado Exitosamente!", "success", 10, null);
							mostrarLibro();
						}else if(respuesta="edi"){
							alertify.notify("Actualizado Exitosamente!", "success", 10, null);
							mostrarLibro();
						}else{
							alertify.notify("Error al Ingresar!", "error", 10, null);
						}
						$('#formLibro')[0].reset();
					}
				});
			}

			
		});
		$('#tabla_libro').on("click", ".item-edi", function(){
			$id=$(this).attr("data");
			$('#libro').modal("show");
			$('#libro').find(".modal-title").text("Editar Libro");
			$('#formLibro').attr("action", "<?= base_url("libroC/actualizar")?>");

			$.ajax({
				type: 'ajax',
				method: 'post',
				url:  '<?= base_url("libroC/get_datos")?>',
				data:  {id:$id},
				dataType: 'json',

				success: function(datos){
					$('#isbn').val(datos.isbn);
					$('#nombre').val(datos.nombre);
					$('#fecha_prestamo').val(datos.fecha_prestamo);
					$('#fecha_entrega').val(datos.fecha_entrega);
					$('#estado').val(datos.id_estado);
					$('#genero').val(datos.id_genero);
					$('#autores').val(datos.id_autores);
					$('#pais').val(datos.id_pais);
					$('#editorial').val(datos.id_editorial);


					
				}
			});


		});





	});



</script>