<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("Usuarioss_model");
	}

	
	public function index()
	{
		$data  = array(
			'usuarios' => $this->Usuarioss_model->getUsuarios(), 
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/usuarios/list",$data);
		$this->load->view("layouts/footer");

	}

	public function add(){

		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/usuarios/add");
		$this->load->view("layouts/footer");
	}

	public function store(){
		$nombe = $this->input->post("nombe");
		$apellido = $this->input->post("apellido");
		$username = $this->input->post("username");
		$password = $this->input->post("password");
		$correo = $this->input->post("correo"); 
		$fecha_ingreso = $this->input->post("fecha_ingreso");
		$id_rol = $this->input->post("id_rol");

		$data  = array(
			'nombe' => $nombe, 
			'apellido' => $apellido,
			'username' => $username,
			'password' => $password, 
			'correo' => $correo,
			'fecha_ingreso' =>  $fecha_ingreso,
			'id_rol' =>  $id_rol,
			'estado' => "1"

		
		);

		if ($this->Usuarioss_model->save($data)) {
			redirect(base_url()."mantenimiento/usuarios");
		}
		else{
			$this->session->set_flashdata("error","No se pudo guardar la informacion");
			redirect(base_url()."mantenimiento/usuarios/add");
		}
	}

	public function edit($idUsuario){
		$data  = array(
			'usuario' => $this->Usuarioss_model->getUsuario($idUsuario), 
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/usuarios/edit",$data);
		$this->load->view("layouts/footer");
	}

	public function update(){
		$idUsuario = $this->input->post("idUsuario");
		$nombe = $this->input->post("nombe");
		$apellido = $this->input->post("apellido");
		$username = $this->input->post("username");
		$password = $this->input->post("password");
		$fecha_ingreso = $this->input->post("fecha_ingreso");
		$correo = $this->input->post("correo");
		$id_rol = $this->input->post("id_rol");

		$data = array(
			'nombe' => $nombe, 
			'apellido' => $apellido,
			'username' => $username,
			'password' => $password, 
			'correo' => $correo,
			'fecha_ingreso' =>  $fecha_ingreso,
			'id_rol' =>  $id_rol,
		);

		if ($this->Usuarioss_model->update($idUsuario,$data)) {
			redirect(base_url()."mantenimiento/usuarios");
		}
		else{
			$this->session->set_flashdata("error","No se pudo actualizar la informacion");
			redirect(base_url()."mantenimiento/usuarios/edit/".$idUsuario);
		}
	}

	public function view($idUsuario){
		$data  = array(
			'usuario' => $this->Usuarioss_model->getUsuario($idUsuario), 
		);
		$this->load->view("admin/usuarios/view",$data);
	}

	public function delete($idUsuario){
		$data  = array(
			'estado' => "0", 
		);
		$this->Usuarioss_model->update($idUsuario,$data);
		echo "mantenimiento/usuarios";
	}
}
