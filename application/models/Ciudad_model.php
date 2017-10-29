<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ciudad_model extends CI_Model {

	public function getCiudades(){
		$this->db->where("estado","1");
		$resultados = $this->db->get("ciudad");
		return $resultados->result();
	}

	public function save($data){
		return $this->db->insert("ciudad",$data);
	}
	public function getCiudad($idCiudad){
		$this->db->where("idCiudad",$idCiudad);
		$resultado = $this->db->get("ciudad");
		return $resultado->row();

	}

	public function update($idCiudad,$data){
		$this->db->where("idCiudad",$idCiudad);
		return $this->db->update("ciudad",$data);
	}
}
