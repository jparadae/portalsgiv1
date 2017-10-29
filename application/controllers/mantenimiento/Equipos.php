<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Equipos extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("Equipos_model");
		$this->load->model("Categorias_model");
		$this->load->model("Local_model");
		
	}

	
	public function index()
	{
		$data  = array(
			'equipos' => $this->Equipos_model->getEquipos(), 
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/equipos/list",$data);
		$this->load->view("layouts/footer");

	}

	public function add(){
      $data =array( 
			"categorias" => $this->Categorias_model->getCategorias(),
			"locales" => $this->Local_model->getLocales()
			
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/equipos/add");
		$this->load->view("layouts/footer");
	}

	public function store(){
		$Nombre = $this->input->post("Nombre");
		$descripcion = $this->input->post("descripcion");
		$codigo_servicio = $this->input->post("codigo_servicio");
		$categoria = $this->input->post("categoria");
		$idMarca = $this->input->post("idMarca"); 
		$modelo = $this->input->post("modelo");
		$eestablecimiento = $this->input->post("eestablecimiento");
		$serie = $this->input->post("serie"); 
		$habilitar_monitoreo = $this->input->post("habilitar_monitoreo");
		$ubicacion = $this->input->post("ubicacion");



		$data  = array(
			'Nombre' => $Nombre, 
			'descripcion' => $descripcion,
			'codigo_servicio' => $codigo_servicio,
			'idCategoria' => $categoria, 
			'idMarca' => $idMarca,
			'modelo' =>  $modelo,
			'idEstablecimiento' =>$eestablecimiento, 
			'serie' => $serie,
			'habilitar_monitoreo' =>$habilitar_monitoreo,
			'ubicacion' =>  $ubicacion,
			'estado' => "1"

		
		);

		if ($this->Equipos_model->save($data)) {
			redirect(base_url()."mantenimiento/equipos");
		}
		else{
			$this->session->set_flashdata("error","No se pudo guardar la informacion");
			redirect(base_url()."mantenimiento/equipos/add");
		}
	}

	public function edit($idEquipo){
		$data  = array(
			'equipo' => $this->Equipos_model->getEquipo($idEquipo), 
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/equipos/edit",$data);
		$this->load->view("layouts/footer");
	}

	public function update(){
		$idEquipo = $this->input->post("idEquipo");
		$Nombre = $this->input->post("Nombre");
		$descripcion = $this->input->post("descripcion");
		$codigo_servicio = $this->input->post("codigo_servicio");
		$categoria = $this->input->post("idCategoria");
		$idMarca = $this->input->post("idMarca"); 
		$modelo = $this->input->post("modelo");
		$eestablecimiento = $this->input->post("idEstablecimiento");
		$serie = $this->input->post("serie"); 
		$habilitar_monitoreo = $this->input->post("habilitar_monitoreo");
		$ubicacion = $this->input->post("ubicacion");

		$data = array(
			'Nombre' => $Nombre, 
			'descripcion' => $descripcion,
			'codigo_servicio' => $codigo_servicio,
			'idCategoria' => $categoria, 
			'idMarca' => $idMarca,
			'modelo' =>  $modelo,
			'idEstablecimiento' => $eestablecimiento, 
			'serie' => $serie,
			'habilitar_monitoreo' => $habilitar_monitoreo,
			'ubicacion' =>  $ubicacion,
			'estado' => "1"
			
		);

		if ($this->Equipos_model->update($idEquipo,$data)) {
			redirect(base_url()."mantenimiento/equipos");
		}
		else{
			$this->session->set_flashdata("error","No se pudo actualizar la informacion");
			redirect(base_url()."mantenimiento/equipos/edit/".$idEquipo);
		}
	}

	public function view($idEquipo){
		$data  = array(
			'equipo' => $this->Equipos_model->getEquipo($idEquipo), 
		);
		$this->load->view("admin/equipos/view",$data);
	}

	public function delete($idEquipo){
		$data  = array(
			'estado' => "0", 
		);
		$this->Equipos_model->update($idEquipo,$data);
		echo "mantenimiento/equipos";
	}
}
