<?php $this->load->helper("ajax_libro") ?>

<body>
	
	<button type="button" class="btn btn-success" id="nueLib">Nuevo</button>
	<table class="table table-dark">
		<tr>
			<td>ISBN</td>
			<td>NOMBRE</td>
			<td>FECHA_PRESTAMO</td>
			<td>FECHA_ENTREGA</td>		
			<td>ESTADO</td>
			<td>GENERO</td>
			<td>AUTORES</td>
			<td>PAIS</td>
			<td>EDITORIAL</td>
			<td>ELIMINAR</td>
			<td>EDITAR</td>

		</tr>
		<tbody id="tabla_libro">
			
		</tbody>



	</table>

	<!-- Modal -->
	<div class="modal fade" id="modalBorrar" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" >Seguro que Desea Borrar</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-primary" id="btnBorrar">Si, Borrar</button>
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>

				</div>
			</div>
		</div>
	</div>



	<!-- Modal -->
	<div class="modal fade" id="libro" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel"></h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<center>
						<form id="formLibro" action="libro" method="POST" >
							<td>ISBN</td>
							 <!-- <input type="hidden" name="isbn" id="id" >  -->
							
							<input type="number" name="isbn" id="isbn"> 
							<br>
							<br>

							<td>Nombre</td>
							<input type="text" name="nombre" id="nombre">
							<br>
							<br>
							<td>Fecha Prestamo</td>
							<input type="date" name="fecha_prestamo" id="fecha_prestamo">
							<br>
							<br>
							<td>Fecha Entrega</td>
							<input type="date" name="fecha_entrega" id="fecha_entrega">
							<br>
							<br>
							<td>Estado</td>
							<select name="estado" id="estado">
								<option value="">--Seleccione Estado--</option>
							</select>
							<br>
							<br>
							<td>genero</td>
							<select name="genero" id="genero">
								<option value="">--Seleccione genero--</option>
							</select>
							<br>
							<br>
							<td>autores</td>
							<select name="autores" id="autores">
								<option value="">--Seleccione autores--</option>
							</select>
							<br>
							<br>
							<td>pais</td>
							<select name="pais" id="pais">
								<option value="">--Seleccione pais--</option>
							</select>
							<br>
							<br>
							<td>editorial</td>
							<select name="editorial" id="editorial">
								<option value="">--Seleccione editorial--</option>
							</select>
							<br>
							<br>


						</form>
					</center>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-primary" id="btnGuardar">Guardar</button>
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
					
				</div>
			</div>
		</div>
	</div>