<?php 
class pengumuman extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('pengumuman_model');
	}
	
	public function index()
	{
		$data['judul']='Pengumuman';
		$data['sub_judul']='Halaman Pengumuman';
		$data['halaman']='admin/v_pengumuman';
		$data['isi'] = $this->pengumuman_model->all();

		$this->load->view('admin/v_template', $data);
		

	}
	public function tambah()
	{
		$data['judul']='tambah Pengumuman';
		$data['sub_judul']='Tambah Halaman Pengumuman';
		$data['halaman']='admin/v_tambah_pengumuman';
		// $data['isi'] = $this->pengumuman_model->all();

		$this->load->view('admin/v_template', $data);
	}
	public function proses_tambah()
	{
		$judul= $this->input->post('judul');
		$isi= $this->input->post('isi');
		$penulis= $this->input->post('penulis');

		$obj = array(
			'judul'=>$judul,
			'isi'=>$isi,
			'penulis'=>$penulis
		);
		if ($this->pengumuman_model-> create($obj)) {
			$this->session->set_flashdata('info', 'Data Berhasil Disimpan');
			redirect('admin/pengumuman');
		}else{
			$this->session->set_flashdata('info', 'Data Gagal Disimpan');
			redirect('admin/pengumuman');
		}
	}
	public function Hapus($Kd)
	{
		if ($this->pengumuman_model->remove($Kd)) {
			$this->session->set_flashdata('info', 'Data Berhasil Dihapus');
			redirect('admin/pengumuman');
		}else{
			$this->session->set_flashdata('info', 'Data Gagal Dihapus');
			redirect('admin/pengumuman');
		}
	}
	public function edit($Kd)
	{
		$data['judul']='Edit Pengumuman';
		$data['sub_judul']='Edit Halaman Pengumuman';
		$data['halaman']='admin/v_edit';

		$data['isi'] = $this->pengumuman_model->get_id($Kd);

		$this->load->view('admin/v_template', $data);	
	}
	public function Proses_edit()
	{
		$judul= $this->input->post('judul');
		$isi= $this->input->post('isi');
		$penulis= $this->input->post('penulis');
		$id = $this->input->post('id');

		$obj = array(
			'judul'=>$judul,
			'isi'=>$isi,
			'penulis'=>$penulis
		);
		if ($this->pengumuman_model->update($id, $obj)) {
			$this->session->set_flashdata('info', 'Data Berhasil DiEdit');
			redirect('admin/pengumuman');
		}else{
			$this->session->set_flashdata('info', 'Data Gagal DiEdit');
			redirect('admin/pengumuman');
		}
	}

}

 ?>