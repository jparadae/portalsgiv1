<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categorias_model extends CI_Model {

	public function getCategorias(){
		$this->db->where("estado","1");
		$resultados = $this->db->get("categoria_equipo");
		return $resultados->result();
	}

	public function save($data){
		return $this->db->insert("categoria_equipo",$data);
	}
	public function getCategoria($idCategoria){
		$this->db->where("idCategoria",$idCategoria);
		$resultado = $this->db->get("categoria_equipo");
		return $resultado->row();

	}

	public function update($idCategoria,$data){
		$this->db->where("idCategoria",$idCategoria);
		return $this->db->update("categoria_equipo",$data);
	}
}
