<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Comuna extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("Comuna_model");
	}

	
	public function index()
	{
		$data  = array(
			'comunas' => $this->Comuna_model->getComunas(), 
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/comuna/list",$data);
		$this->load->view("layouts/footer");

	}

	public function add(){

		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/comuna/add");
		$this->load->view("layouts/footer");
	}

	public function store(){
		$Nombre = $this->input->post("Nombre");
		
	

		$data  = array(
			'Nombre' => $Nombre, 
			'estado' => "1"

		
		);

		if ($this->Comuna_model->save($data)) {
			redirect(base_url()."mantenimiento/comuna");
		}
		else{
			$this->session->set_flashdata("error","No se pudo guardar la informacion");
			redirect(base_url()."mantenimiento/comuna/add");
		}
	}

	public function edit($idComuna){
		$data  = array(
			'comuna' => $this->Comuna_model->getComuna($idComuna), 
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/comuna/edit",$data);
		$this->load->view("layouts/footer");
	}

	public function update(){
		$idComuna = $this->input->post("idComuna");
		$Nombre = $this->input->post("Nombre");
	 

		$data = array(
			'Nombre' => $Nombre, 

		);

		if ($this->Comuna_model->update($idComuna,$data)) {
			redirect(base_url()."mantenimiento/comuna");
		}
		else{
			$this->session->set_flashdata("error","No se pudo actualizar la informacion");
			redirect(base_url()."mantenimiento/comuna/edit/".$idComuna);
		}
	}

	public function view($idComuna){
		$data  = array(
			'comuna' => $this->Comuna_model->getComuna($idComuna), 
		);
		$this->load->view("admin/comuna/view",$data);
	}

	public function delete($idComuna){
		$data  = array(
			'estado' => "0", 
		);
		$this->Comuna_model->update($idComuna,$data);
		echo "mantenimiento/comuna";
	}
}
