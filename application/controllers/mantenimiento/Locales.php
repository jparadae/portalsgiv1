<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Locales extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("Local_model");
	}

	
	public function index()
	{
		$data  = array(
			'locales' => $this->Local_model->getLocales(), 
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/locales/list",$data);
		$this->load->view("layouts/footer");

	}

	public function add(){

		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/locales/add");
		$this->load->view("layouts/footer");
	}

	public function store(){
		$numero_estable_sgii = $this->input->post("numero_estable_sgii");
		$nombre_sucursal = $this->input->post("nombre_sucursal");
		$direccion = $this->input->post("direccion");
		$nombreciudad = $this->input->post("nombreciudad");
		$nombrecomuna = $this->input->post("nombrecomuna"); 
	

		$data  = array(
			'numero_estable_sgii' => $numero_estable_sgii, 
			'nombre_sucursal' => $nombre_sucursal,
			'direccion' => $direccion,
			'ciudad_id' => $nombreciudad, 
			'comuna_id' => $nombrecomuna,
			'estado' => "1"

		
		);

		if ($this->Local_model->save($data)) {
			redirect(base_url()."mantenimiento/locales");
		}
		else{
			$this->session->set_flashdata("error","No se pudo guardar la informacion");
			redirect(base_url()."mantenimiento/locales/add");
		}
	}

	public function edit($idEstablecimiento){
		$data  = array(
			'local' => $this->Local_model->getLocal($idEstablecimiento), 
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/locales/edit",$data);
		$this->load->view("layouts/footer");
	}

	public function update(){
		$idEstablecimiento = $this->input->post("idEstablecimiento");
		$numero_estable_sgii = $this->input->post("numero_estable_sgii");
		$nombre_sucursal = $this->input->post("nombre_sucursal");
		$direccion = $this->input->post("direccion");
		$nombreciudad = $this->input->post("ciudad_id");
		$nombrecomuna = $this->input->post("comuna_id"); 

		$data = array(
			'numero_estable_sgii' => $numero_estable_sgii, 
			'nombre_sucursal' => $nombre_sucursal,
			'direccion' => $direccion,
			'ciudad_id' => $nombreciudad, 
			'comuna_id' => $nombrecomuna,
		);

		if ($this->Local_model->update($idEstablecimiento,$data)) {
			redirect(base_url()."mantenimiento/locales");
		}
		else{
			$this->session->set_flashdata("error","No se pudo actualizar la informacion");
			redirect(base_url()."mantenimiento/locales/edit/".$idEstablecimiento);
		}
	}

	public function view($idEstablecimiento){
		$data  = array(
			'local' => $this->Local_model->getLocal($idEstablecimiento), 
		);
		$this->load->view("admin/locales/view",$data);
	}

	public function delete($idEstablecimiento){
		$data  = array(
			'estado' => "0", 
		);
		$this->Local_model->update($idEstablecimiento,$data);
		echo "mantenimiento/locales";
	}
}
