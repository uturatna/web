<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_dosen extends CI_Model {

	public function all()
	{
		return $this->db->get('dosen')->result();
	}
	public function create($obj)
	{
		return $this->db->insert('dosen', $obj);
	}
	public function get_id($nik){
	return $this->db->where('nik', $nik)->get('dosen')->row();
	}
	public function update($nik, $obj){
	return $this->db->where('nik', $nik)->update('dosen', $obj);
	}
	public function remove($nik){
	return $this->db->delete('dosen', array('nik' => $nik));
	}
	

	

}

/* End of file m_dosen.php */
/* Location: ./application/models/m_dosen.php */