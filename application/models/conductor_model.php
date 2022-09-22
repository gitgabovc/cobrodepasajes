<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Conductor_model extends CI_Model
{

	public function listaconductores()
	{
		$this->db->select('*'); 
		$this->db->from('conductores'); 
		$this->db->where('habilitado', '1');
		return $this->db->get();	
	}

	public function agregarconductor($data)
	{
		$this->db->insert('conductores', $data);
	}

	public function eliminarconductor($idConductor)
	{
		$this->db->where('idConductor', $idConductor);
		$this->db->delete('conductores');
	}

	public function recuperarconductor($idConductor)
	{
		$this->db->select('*'); //select*
		$this->db->from('conductores'); //tabla
		$this->db->where('idConductor', $idConductor);
		return $this->db->get();	
	}

	public function modificarconductor($idConductor, $data)
	{
		$this->db->where('idConductor', $idConductor);
		$this->db->update('conductores', $data);
	}

	public function listaconductoresdeshabilitados()
	{
		$this->db->select('*'); //select*
		$this->db->from('conductores'); //tabla
		$this->db->where('habilitado', '0');
		return $this->db->get();	//devolucion del resultado de la consulta
	}
}
