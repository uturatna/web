<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class kuiis extends CI_Controller {

	public function index(){
		echo "ini controler Kuis";

	public function data($param1=''){
		echo "Hello saudara . .<br> ";
		echo "Nama saya ".$param1;
		echo "<br>";
		echo "<br>";
		echo "Salam lemper.....";
	}

	
}