<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class libroC extends CI_Controller {

	public function __construct(){
		parent:: __construct();
		$this->load->model("libroM");

	}

	public function index(){
		$datos=array("title" => "AJAX || AVANZADO");
		$this->load->view("template/header", $datos);
		$this->load->view("libroV");
		$this->load->view("template/footer");

	}

	public function get_libro(){
		$respuesta=$this->libroM->get_libro();
		echo json_encode($respuesta);
	}

	public function eliminar(){
		$id=$this->input->post("id");
		$respuesta=$this->libroM->eliminar($id);
		echo json_encode($id);
	}



	public function get_estado(){
		$respuesta=$this->libroM->get_estado();
		echo json_encode($respuesta);
	}


	public function get_genero(){
		$respuesta=$this->libroM->get_genero();
		echo json_encode($respuesta);
	}


	public function get_autores(){
		$respuesta=$this->libroM->get_autores();
		echo json_encode($respuesta);
	}


	public function get_pais(){
		$respuesta=$this->libroM->get_pais();
		echo json_encode($respuesta);
	}


	public function get_editorial(){
		$respuesta=$this->libroM->get_editorial();
		echo json_encode($respuesta);
	}

	public function ingresar(){
		$datos["isbn"]=$this->input->post("isbn");
		$datos["nombre"]=$this->input->post("nombre");
		$datos["fecha_prestamo"]=$this->input->post("fecha_prestamo");
		$datos["fecha_entrega"]=$this->input->post("fecha_entrega");
		$datos["estado"]=$this->input->post("estado");
		$datos["genero"]=$this->input->post("genero");
		$datos["autores"]=$this->input->post("autores");
		$datos["pais"]=$this->input->post("pais");
		$datos["editorial"]=$this->input->post("editorial");
		$respuesta=$this->libroM->set_libro($datos);
		echo json_encode($respuesta);
	}

	public function get_datos(){
		$id=$this->input->post("id");
		$respuesta=$this->libroM->get_datos($id);
		echo json_encode($respuesta);
	}

	public function actualizar(){
		$datos["id"]=$this->input->post("isbn");
		$datos["isbn"]=$this->input->post("isbn");
		$datos["nombre"]=$this->input->post("nombre");
		$datos["fecha_prestamo"]=$this->input->post("fecha_prestamo");
		$datos["fecha_entrega"]=$this->input->post("fecha_entrega");
		$datos["estado"]=$this->input->post("estado");
		$datos["genero"]=$this->input->post("genero");
		$datos["autores"]=$this->input->post("autores");
		$datos["pais"]=$this->input->post("pais");
		$datos["editorial"]=$this->input->post("editorial");
		$respuesta=$this->libroM->actualizar($datos);
		echo json_encode($respuesta);
	}


	
}
