<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class coba extends CI_Controller
{
	function index(){
		echo "Ini Baru Dicoba";
	}
	public function coba_lagi($param="")
	{
		echo "Coba Controller <br>". $param;
	}
}