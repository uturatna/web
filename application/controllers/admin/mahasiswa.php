<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Mhs_model');
	}

	public function index()
	{
	$data['judul']='Mahasiswa';		
	$data['sub_judul']='Halaman Mahasiswa';		
	$data['halaman']='admin/v_mahasiswa';
	$data['isi']= $this->Mhs_model->all();
	$this->load->view('admin/v_template', $data);		
	}
	public function add_mhs()
	{
	$data['judul']='Tambah Mahasiswa';		
	$data['sub_judul']='Halaman Tambah Mahasiswa';		
	$data['halaman']='admin/v_add_mhs';
	$this->load->view('admin/v_template', $data);
	}
	public function add_process()
	{
	$nim= $this->input->post('nim');	
	$nama= $this->input->post('nama');	
	$program= $this->input->post('program');
	$a=array(
		'nim'=>$nim,
		'nama_mhs'=>$nama,
		'program_study'=>$program
	);
	if ($this->Mhs_model-> create($a)) {
			$this->session->set_flashdata('info', 'Data Berhasil Disimpan');
			redirect('admin/mahasiswa');
	}else{
			$this->session->set_flashdata('info', 'Data Gagal Disimpan');
			redirect('admin/mahasiswa');
	}
	}
	public function edit_mhs($nim)
	{
	$data['judul']='Edit Data';		
	$data['sub_judul']='Edit Data';		
	$data['halaman']='admin/v_edit_mhs';
	$data['isi'] = $this->Mhs_model->get_id($nim);
	$this->load->view('admin/v_template', $data);
	}
	public function edit_process()
	{
	$nim= $this->input->post('nim');	
	$nama= $this->input->post('nama');	
	$program= $this->input->post('program');
	$a=array(
		'nim'=>$nim,
		'nama_mhs'=>$nama,
		'program_study'=>$program
	);
		
		if ($this->Mhs_model->update($nim, $a)) {
			$this->session->set_flashdata('info', 'Data Berhasil DiEdit');
			redirect('admin/mahasiswa');
		}else{
			$this->session->set_flashdata('info', 'Data Gagal DiEdit');
			redirect('admin/mahasiswa');
		}
	}
	public function delete($nim)
	{
		if ($this->Mhs_model->remove($nim)) {
			$this->session->set_flashdata('info', 'Data Berhasil Dihapus');
			redirect('admin/mahasiswa');
		}else{
			$this->session->set_flashdata('info', 'Data Gagal Dihapus');
			redirect('admin/mahasiswa');
		}
	}

}

/* End of file mahasiswa.php */
/* Location: ./application/controllers/admin/mahasiswa.php */