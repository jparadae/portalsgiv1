<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Local_model extends CI_Model {

	public function getLocales(){
		$this->db->select("e.*,comuna.Nombre as nombrecomuna, ciudad.Nombre as nombreciudad");
		$this->db->from("establecimiento e");
		$this->db->join("comuna","e.ciudad_id = comuna.idComuna");
		$this->db->join("ciudad","e.comuna_id = ciudad.idCiudad");
		$this->db->where("e.estado","1");
		$resultados = $this->db->get();
		return $resultados->result();
	}

	public function save($data){
		return $this->db->insert("establecimiento",$data);
	}
	public function getLocal($idEstablecimiento){
		$this->db->where("idEstablecimiento",$idEstablecimiento);
		$resultado = $this->db->get("establecimiento");
		return $resultado->row();

	}

	public function update($idEstablecimiento,$data){
		$this->db->where("idEstablecimiento",$idEstablecimiento);
		return $this->db->update("establecimiento",$data);
	}
}
