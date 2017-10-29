<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ciudad extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("Ciudad_model");
	}

	
	public function index()
	{
		$data  = array(
			'ciudades' => $this->Ciudad_model->getCiudades(), 
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/ciudad/list",$data);
		$this->load->view("layouts/footer");

	}

	public function add(){

		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/ciudad/add");
		$this->load->view("layouts/footer");
	}

	public function store(){
		$Nombre = $this->input->post("Nombre");

	

		$data  = array(
			'Nombre' => $Nombre, 		
			'estado' => "1"

		
		);

		if ($this->Ciudad_model->save($data)) {
			redirect(base_url()."mantenimiento/ciudad");
		}
		else{
			$this->session->set_flashdata("error","No se pudo guardar la informacion");
			redirect(base_url()."mantenimiento/ciudad/add");
		}
	}

	public function edit($idCiudad){
		$data  = array(
			'ciudad' => $this->Ciudad_model->getCiudad($idCiudad), 
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/ciudad/edit",$data);
		$this->load->view("layouts/footer");
	}

	public function update(){
		$idCiudad = $this->input->post("idCiudad");
		$Nombre = $this->input->post("Nombre");
		

		$data = array(
			'Nombre' => $Nombre
		);

		if ($this->Ciudad_model->update($idCiudad,$data)) {
			redirect(base_url()."mantenimiento/ciudad");
		}
		else{
			$this->session->set_flashdata("error","No se pudo actualizar la informacion");
			redirect(base_url()."mantenimiento/ciudad/edit/".$idCiudad);
		}
	}

	public function view($idCiudad){
		$data  = array(
			'ciudad' => $this->Ciudad_model->getCiudad($idCiudad), 
		);
		$this->load->view("admin/ciudad/view",$data);
	}

	public function delete($idCiudad){
		$data  = array(
			'estado' => "0", 
		);
		$this->Ciudad_model->update($idCiudad,$data);
		echo "mantenimiento/ciudad";
	}
}
