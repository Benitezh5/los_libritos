<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class libroM extends CI_Model {

	public function get_libro(){
		$pa_consultar= "CALL pa_consultar()";
		$query=$this->db->query($pa_consultar);
		if($query->num_rows()>0){
			return $query->result();
		}else{
			return false;
		}
	}

	public function eliminar($id){
		$pa_eliminar="CALL pa_eliminar(?)";
		$arreglo=array("isbn" => $id);
		$query=$this->db->query($pa_eliminar, $arreglo);
		if($query){
			return true;
		}else{
			return false;
		}
	}

	public function get_estado(){
		$exe=$this->db->get("estado");
		return $exe->result();
	}

	public function get_genero(){
		$exe=$this->db->get("genero");
		return $exe->result();
	}

	public function get_autores(){
		$exe=$this->db->get("autores");
		return $exe->result();
	}

	public function get_pais(){
		$exe=$this->db->get("pais");
		return $exe->result();
	}

	public function get_editorial(){
		$exe=$this->db->get("editorial");
		return $exe->result();
	}

	public function set_libro($datos){
		$pa_insertar="CALL pa_insertar(?,?,?,?,?,?,?,?,?)";
		$arreglo=array("isbn" => $datos["isbn"],
			"nombre" => $datos["nombre"],
			"fecha_prestamo" => $datos["fecha_prestamo"],
			"fecha_entrega" => $datos["fecha_entrega"],
			"id_estado" => $datos["estado"],
			"id_genero" => $datos["genero"],
			"id_autores" => $datos["autores"],
			"id_pais" => $datos["pais"],
			"id_editorial" => $datos["editorial"]);
		$query=$this->db->query($pa_insertar, $arreglo);
		if($query!==null){
			return "add";
		}else{
			return false;
		}

	}

	public function get_datos($id){
		$pa_consultarporid="CALL pa_consultarporid(?)";
		$arreglo= array("isbn" => $id);
		$query=$this->db->query($pa_consultarporid, $arreglo);
		if($query->num_rows()>0){
			return $query->row();
		}else{
			return false;
		}
	}



	public function actualizar($datos){
		$pa_actualizar="CALL pa_actualizar(?,?,?,?,?,?,?,?,?)";
		$arreglo=array("isbn" => $datos["isbn"],
			"nombre" => $datos["nombre"],
			"fecha_prestamo" => $datos["fecha_prestamo"],
			"fecha_entrega" => $datos["fecha_entrega"],
			"id_estado" => $datos["estado"],
			"id_genero" => $datos["genero"],
			"id_autores" => $datos["autores"],
			"id_pais" => $datos["pais"],
			"id_editorial" => $datos["editorial"]);
		$query=$this->db->query($pa_actualizar, $arreglo);
		if($query){
			return "edi";
		}else{
			return false;
		}

	}

	




}