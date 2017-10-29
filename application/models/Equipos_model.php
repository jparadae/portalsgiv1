<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Equipos_model extends CI_Model {

	public function getEquipos(){
		$this->db->select("e.*,c.nombre as categoria, marca_equipo.nombre as marca, establecimiento.nombre_sucursal as eestablecimiento");
		$this->db->from("equipo e");
		$this->db->join("categoria_equipo c","e.idCategoria = c.idCategoria");
		$this->db->join("marca_equipo","e.idMarca = marca_equipo.idMarca_equipo");
		$this->db->join("establecimiento","e.idEstablecimiento = establecimiento.idEstablecimiento");
		$this->db->where("e.estado","1");
		$resultados = $this->db->get();
		return $resultados->result();
	}
	public function getEquipo($idEquipo){
		$this->db->where("idEquipo",$idEquipo);
		$resultado = $this->db->get("equipo");
		return $resultado->row();
	}
	public function save($data){
		return $this->db->insert("equipo",$data);
	}

	public function update($idEquipo,$data){
		$this->db->where("idEquipo",$idEquipo);
		return $this->db->update("equipo",$data);
	}

}