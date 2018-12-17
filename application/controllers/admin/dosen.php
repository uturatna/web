<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dosen extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
		$this->load->model('m_dosen');
	}

	public function index()
	{
		$data['judul']='Halaman Dosen';
		$data['sub_judul']='Data Dosen';
		$data['halaman']='dosen/v_dosen';
		$data['isi']=$this->m_dosen->all();

		$this->load->view('admin/v_template', $data);
	}
	public function add_data()
	{
		$data['judul']='Halaman Tambah Dosen';
		$data['sub_judul']='Tambah Data Dosen';
		$data['halaman']='dosen/v_tambah_dosen';

		$this->load->view('admin/v_template', $data);
	}
	public function add_process()
	{
		$nik=$this->input->post('nik');
		$nama=$this->input->post('nama');
		$alamat=$this->input->post('alamat');

		$obj=array(
			'nik' =>$nik,
			'nama_dosen'=> $nama,
			'alamat'=> $alamat 
		);
	if ($this->m_dosen-> create($obj)) {
			$this->session->set_flashdata('info', 'Data Berhasil Disimpan');
			redirect('admin/dosen');
	}else{
			$this->session->set_flashdata('info', 'Data Gagal Disimpan');
			redirect('admin/dosen');
	}
	}
	public function edit($nik)
	{
		$data['judul']='Halaman Edit Dosen';
		$data['sub_judul']='Edit Data';
		$data['halaman']='dosen/v_edit';

		$data['isi'] = $this->m_dosen->get_id($nik);

		$this->load->view('admin/v_template', $data);	
	}
	public function edit_process()
	{
		$nik=$this->input->post('nik');
		$nama=$this->input->post('nama');
		$alamat=$this->input->post('alamat');

		$obj=array(
			'nama_dosen'=> $nama,
			'alamat'=> $alamat 
		);
		if ($this->m_dosen->update($nik, $obj)) {
			$this->session->set_flashdata('info', 'Data Berhasil DiEdit');
			redirect('admin/dosen');
		}else{
			$this->session->set_flashdata('info', 'Data Gagal DiEdit');
			redirect('admin/dosen');
		}
	}
	public function delete($nik)
	{
		if ($this->m_dosen->remove($nik)) {
			$this->session->set_flashdata('info', 'Data Berhasil Dihapus');
			redirect('admin/dosen');
		}else{
			$this->session->set_flashdata('info', 'Data Gagal Dihapus');
			redirect('admin/dosen');
		}
	}
}

/* End of file dosen.php */
/* Location: ./application/controllers/admin/dosen.php */