<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	
	public function index()
	{
		/*
		if($this->session->email)
		{

		$data['jumlah_produk'] = $this->db->query('
		SELECT COUNT(*) as jumlah FROM produk
		')->row(0)->jumlah;

		$data['jumlah_kategori'] = $this->db->query('
		SELECT COUNT(*) as jumlah FROM kategori
		')->row(0)->jumlah;

		$data['jumlah_penjualan'] = $this->db->query('
		SELECT COUNT(*) as jumlah FROM penjualan
		')->row(0)->jumlah;

		$data['kategori_produk_terbanyak'] = $this->db->query('
		SELECT kategori.nama as nama, COUNT(produk.nama) as jumlah 
		FROM kategori 
		JOIN produk on produk.id_kategori = kategori.id_kategori 
		GROUP BY kategori.nama 
		ORDER BY jumlah DESC
		')->row(0)->nama;

		$data['produk'] = $this->db->query('
		SELECT * FROM produk
		')->result();

		$data['bulan_transaksi'] = $this->db->query('
		SELECT DISTINCT concat(MONTHNAME(waktu_penjualan), YEAR(waktu_penjualan)) AS waktu, MONTHNAME(waktu_penjualan) AS bulan, YEAR(waktu_penjualan) AS tahun 
		FROM penjualan ORDER BY tahun, waktu_penjualan
		')->result();

		$data['transaksi_perbulan'] = $this->db->query('
		SELECT COUNT(*) AS jumlah, concat(MONTHNAME(waktu_penjualan), YEAR(waktu_penjualan)) as bulan FROM penjualan GROUP BY bulan ORDER BY waktu_penjualan
		')->result();


		show('welcome_message', $data);
		} else {
			$this->load->view('login');
		}
		*/
		if (!$this->session->login){
			$this->load->view('login');
		} else {
			show('welcome_message2');
		}
	}

	public function login(){
		if (!$this->session->login){
			$this->load->view('login');
		} else {
			show('welcome_message2');
		}
	}

	public function register(){
		$this->load->view('register');
	}

	public function login_action(){
		$email = $this->input->post('inputEmail');
		$password = $this->input->post('inputPassword');

		$this->db->where('email', $email);
		$this->db->where('password', $password);
		$available = $this->db->get('user')->row();

		if($available->email == $email){
			$this->session->login = true;
			$this->session->email = $available->email;
			
			$this->session->admin = $available->tipe;
			
		} else {
			echo 'Email atau password salah!';die();
		}

		$this->session->set_flashdata('pesan', 'Berhasil login');
		return redirect('welcome');
	}

	public function register_action(){
		$data = array(
			'email' => $this->input->post('inputEmail'),
			'password' => $this->input->post('inputPassword')
		);
		$this->session->login = true;
		$this->session->email = $email;

		$this->session->set_flashdata('pesan', 'Berhasil Daftar');
		return redirect('welcome');
	}

	public function logout(){
		$this->session->sess_destroy();
		return redirect('welcome');
	}
}
