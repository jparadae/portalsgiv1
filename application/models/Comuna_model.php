<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Comuna_model extends CI_Model {

	public function getComunas(){
		$this->db->where("estado","1");
		$resultados = $this->db->get("comuna");
		return $resultados->result();
	}

	public function save($data){
		return $this->db->insert("comuna",$data);
	}
	public function getComuna($idComuna){
		$this->db->where("	idComuna",$idComuna);
		$resultado = $this->db->get("comuna");
		return $resultado->row();

	}

	public function update($idComuna,$data){
		$this->db->where("idComuna",$idComuna);
		return $this->db->update("comuna",$data);
	}
}
