<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mhs_model extends CI_Model {

	public function all()
	{
		return $this->db->get('mahasiswa')->result();
	}
	public function create($id)
	{
		return $this->db->insert('mahasiswa', $id);
	}
	public function get_id($nim){
	return $this->db->where('nim', $nim)->get('mahasiswa')->row();
	}
	public function update($id, $obj){
	return $this->db->where('nim', $nim)->update('mahasiswa', $obj);
	}
	public function remove($nim){
	return $this->db->delete('mahasiswa', array('nim' => $nim));
	}

}