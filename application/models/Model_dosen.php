
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_dosen extends CI_Model {

	public function all()
	{
		return $this->db->get('dosen')->result();
	}
	public function create($id)
	{
		return $this->db->insert('dosen', $id);
	}
	public function get_id($nik){
	return $this->db->where('nik', $nik)->get('dosen')->row();
	}
	public function update($nik, $id){
	return $this->db->where('nik', $nik)->update('dosen', $id);
	}
	public function remove($nik){
	return $this->db->delete('dosen', array('nik' => $nik));
	}
	

	

}