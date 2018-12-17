<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class pengumuman_model extends CI_Model {

public function all(){
return $this->db->get('pengumuman')->result();
}
public function get(){

}
public function create($obj){
return $this->db->insert('pengumuman', $obj);

}
public function get_id($Kd){
return $this->db->where('Kd', $Kd)->get('pengumuman')->row();
}
public function remove($Kd){
return $this->db->delete('pengumuman', array('Kd' => $Kd));
}
public function update($id, $obj){
return $this->db->where('Kd', $id)->update('pengumuman', $obj);
}

}