<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categorias extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("Categorias_model");
	}

	
	public function index()
	{
		$data  = array(
			'categorias' => $this->Categorias_model->getCategorias(), 
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/categorias/list",$data);
		$this->load->view("layouts/footer");

	}

	public function add(){

		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/categorias/add");
		$this->load->view("layouts/footer");
	}

	public function store(){
		$nombre = $this->input->post("nombre");
		$archivo = $this->input->post("archivo");
		$equipo = $this->input->post("equipo");
		$documento = $this->input->post("documento");
		$descripcion = $this->input->post("descripcion"); //reemplaza categoria
		$creacion = $this->input->post("creacion");

		$data  = array(
			'Nombre' => $nombre, 
			'Archivo' => $archivo,
			'Equipo_id' => $equipo,
			'Documento' => $documento, 
			'Categoria_Equipocol' => $descripcion,
			'Creacion' =>  $creacion,
			'estado' => "1"

		
		);

		if ($this->Categorias_model->save($data)) {
			redirect(base_url()."mantenimiento/categorias");
		}
		else{
			$this->session->set_flashdata("error","No se pudo guardar la informacion");
			redirect(base_url()."mantenimiento/categorias/add");
		}
	}

	public function edit($idCategoria){
		$data  = array(
			'categoria' => $this->Categorias_model->getCategoria($idCategoria), 
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/categorias/edit",$data);
		$this->load->view("layouts/footer");
	}

	public function update(){
		$idCategoria = $this->input->post("idCategoria");
		$nombre = $this->input->post("nombre");
		$archivo = $this->input->post("archivo");
		$equipo = $this->input->post("equipo");
		$documento = $this->input->post("documento");
		$descripcion = $this->input->post("descripcion"); //reemplaza categoria
		$creacion = $this->input->post("creacion");

		$data = array(
			'Nombre' => $nombre, 
			'Archivo' => $archivo,
			'Equipo_id' => $equipo,
			'Documento' => $documento, 
			'Categoria_Equipocol' => $descripcion,
			'Creacion' =>  $creacion,
			
		);

		if ($this->Categorias_model->update($idCategoria,$data)) {
			redirect(base_url()."mantenimiento/categorias");
		}
		else{
			$this->session->set_flashdata("error","No se pudo actualizar la informacion");
			redirect(base_url()."mantenimiento/categorias/edit/".$idCategoria);
		}
	}

	public function view($idCategoria){
		$data  = array(
			'categoria' => $this->Categorias_model->getCategoria($idCategoria), 
		);
		$this->load->view("admin/categorias/view",$data);
	}

	public function delete($idCategoria){
		$data  = array(
			'estado' => "0", 
		);
		$this->Categorias_model->update($idCategoria,$data);
		echo "mantenimiento/categorias";
	}
}
