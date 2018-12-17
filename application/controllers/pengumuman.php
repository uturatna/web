<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class pengumuman extends CI_Controller {

	 public function index(){
		 echo "ini controler pengumuman";
	}

	public function wisuda($param=""){
		$data['tanggal']="17 Oktober 2018";
		$data['ketua']='Mulyadi Bahtiar M.Si. S.kom';
		$data['tambahan']=$param;
		$this->load->view("v_pengumuman",$data);
	}
	public function detail($param=""){
		$data['judul']='Detail Pengumuman';

		$this->load->view("v_detail", $data);
	}

}