<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

	public function index(){
		echo "ini controler Mahasiswa";
	}

	public function profil()
	{
		echo "Nama : Zahratul Muttaqii'in <br>";
		echo "Nim : 1700330029 <br>";
		echo "Email : zahratulmuttaqiin59@gmail.com <br>";
	}

	// public function dosen($param1=''){
	// 	echo "Nama Dosenku ".$param1;
	// }

	// public function krs($semester='', $matkul=''){
	// 	echo "semester ke ".$semester." saya mengambil ".$matkul;
	// }
	public function get_semester(){
		echo "Semester : 3";
	}
}