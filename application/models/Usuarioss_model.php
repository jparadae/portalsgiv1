<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarioss_model extends CI_Model {

	public function getUsuarios(){
		$this->db->where("estado","1");
		$resultados = $this->db->get("usuarios");
		return $resultados->result();
	}

	public function save($data){
		return $this->db->insert("usuarios",$data);
	}
	public function getUsuario($idUsuario){
		$this->db->where("idUsuario",$idUsuario);
		$resultado = $this->db->get("usuarios");
		return $resultado->row();

	}

	public function update($idUsuario,$data){
		$this->db->where("idUsuario",$id);
		return $this->db->update("usuarios",$data);
	}
}
