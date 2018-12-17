<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mhs_model extends CI_Model {

	public function all()
	{
		return $this->db->get('mahasiwa')->result();
	}
	public function create($a)
	{
		return $this->db->insert('mahasiwa', $a);
	}
	public function get_id($nim){
	return $this->db->where('nim', $nim)->get('mahasiwa')->row();
	}
	public function update($nim, $a){
	return $this->db->where('nim', $nim)->update('mahasiwa', $a);
	}
	public function remove($nim){
	return $this->db->delete('mahasiwa', array('nim' => $nim));
	}

}

/* End of file mhs_mode.php */
/* Location: ./application/models/mhs_mode.php */