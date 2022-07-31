<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dasboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['judul'] = "Halaman Mahasiswa";
		$this->load->view("dasboard/nw_dasboard");
	}
}