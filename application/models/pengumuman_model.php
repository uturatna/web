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
public function get_id($id){
return $this->db->where('id', $id)->get('pengumuman')->row();
}
public function remove($id){
return $this->db->delete('pengumuman', array('id' => $id));
}
public function update($id, $obj){
return $this->db->where('id', $id)->update('pengumuman', $obj);
}

}