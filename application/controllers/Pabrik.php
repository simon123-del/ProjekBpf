<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pabrik extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
        $this->load->model('Pabrik_model');
	}

	public function index()
	{
		$data['judul'] = "Halaman Pabrik";
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['pabrik'] = $this->Pabrik_model->get();
        $this->load->view("layout/header", $data);
        $this->load->view("pabrik/vw_pabrik", $data);
        $this->load->view("layout/footer", $data);
	}

    public function tambah()
	{	
		$data['judul'] = "Halaman Tambah Pabrik";
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['pabrik'] = $this->Pabrik_model->get();

		$this->form_validation->set_rules('nama', 'Nama Pabrik', 'required', [
			'required' => 'Nama Pabrik Wajib di isi'
		]);
		$this->form_validation->set_rules('stok', 'Stok', 'required', [
			'required' => 'Stok Wajib di isi',
			'integer' => 'Stok harus Angka'
		]);
        $this->form_validation->set_rules('harga', 'Harga', 'required', [
			'required' => 'Harga Wajib di isi',
			'integer' => 'Harga harus Angka'
		]);
        $this->form_validation->set_rules('ukuran', 'Ukuran', 'required', [
			'required' => 'Ukuran Wajib di isi',
			'integer' => 'Ukuran harus Angka'
		]);
		if($this->form_validation->run()==false){
			$this->load->view("layout/header", $data);
			$this->load->view("pabrik/vw_tambah_pabrik", $data);
			$this->load->view("layout/footer", $data);
		}
		else{
			$data = [
				'nama' => $this->input->post('nama'),
				'stok' => $this->input->post('stok'),
				'harga' => $this->input->post('harga'),
				'ukuran' => $this->input->post('ukuran'),
				'keterangan' =>$this->input->post('keterangan'),
			];
			$upload_image = $_FILES['gambar']['name'];
			if($upload_image){
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size'] = '2048';
				$config['upload_path'] = './assets/img/sepatu/';
				$this->load->library('upload', $config);
				if($this->upload->do_upload('gambar')) {
					$new_image = $this->upload->data('file_name');
					$this->db->set('gambar', $new_image);
				}
				else{
					echo $this->upload->display_errors();
				}
			}
			$this->Pabrik_model->insert($data, $upload_image);
			$this->session->set_flashdata('message', '<div class="alert alert-success"
			role="alert">Data Pabrik Berhasil Ditambah!</div>');
			redirect('Pabrik');
		}
	}

	public function edit($id)
	{
		$data['judul'] = "Halaman Edit Pabrik";
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['pabrik'] = $this->Pabrik_model->getById($id);

		$this->form_validation->set_rules('nama', 'Nama Pabrik', 'required', [
			'required' => 'Nama Pabrik Wajib di isi'
		]);
		$this->form_validation->set_rules('stok', 'Stok', 'required', [
			'required' => 'Stok Wajib di isi',
			'integer' => 'Stok harus Angka'
		]);
        $this->form_validation->set_rules('harga', 'Harga', 'required', [
			'required' => 'Harga Wajib di isi',
			'integer' => 'Harga harus Angka'
		]);
        $this->form_validation->set_rules('ukuran', 'Ukuran', 'required', [
			'required' => 'Ukuran Wajib di isi',
			'integer' => 'Ukuran harus Angka'
		]);
		if($this->form_validation->run()==false){
        	$this->load->view("layout/header", $data);
        	$this->load->view("pabrik/vw_ubah_pabrik", $data);
        	$this->load->view("layout/footer");
		}
		else{
			$data = [
				'nama' => $this->input->post('nama'),
				'stok' => $this->input->post('stok'),
				'harga' => $this->input->post('harga'),
				'ukuran' => $this->input->post('ukuran'),
				'keterangan' =>$this->input->post('keterangan'),
			];
			$upload_image = $_FILES['gambar']['name'];
			if($upload_image) {
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size'] = '2048';
				$config['upload_path'] = './assets/img/sepatu/';
				$this->load->library('upload', $config);
				if($this->upload->do_upload('gambar')) {
					$old_image = $data['sepatu']['gambar'];
					if($old_image != 'default.jpg') {
						unlink(FCPATH.'assets/img/sepatu/'.$old_image);
					}
					$new_image = $this->upload->data('file_name');
					$this->db->set('gambar', $new_image);
				}
				else{
					echo $this->upload->display_errors();
				}
			}
			$id = $this->input->post('id');
			$this->Pabrik_model->update(['id' => $id], $data, $upload_image);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Pabrik Berhasil Diubah!</div>');
			redirect('Pabrik');
		}
	}

    public function hapus($id){
		$this->Pabrik_model->delete($id);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Pabrik Berhasil Dihapus!</div>');
		redirect('Pabrik');
	}
}