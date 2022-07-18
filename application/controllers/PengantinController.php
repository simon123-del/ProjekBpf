<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PengantinController extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
		if (!$this->session->login == true){
			redirect('login');
		}
	}
	
    private $view_index = 'pengantin/index';
    private $view_show = 'pengantin/show';
    private $view_create = 'pengantin/create';
    private $view_edit = 'pengantin/edit';

    public function index()
    {
        $data['pengantin_pengantin'] = $this->Pengantin->all();
        show($this->view_index, $data);
    }
    public function create()
    {
        show($this->view_create);
    }
    public function store()
    {
        if($this->input->method() != 'post')
        {
            $data['pengantin_pengantin'] = $this->Pengantin->all();
            return redirect('pengantin');
        } 
        else 
        {
            $this->load->helper(array('form', 'url'));
            $this->load->library('form_validation');
            $this->form_validation->set_rules('nama', 'nama', 'is_unique[pengantin.nama]');
            if ($this->form_validation->run() == FALSE)
            {
                $this->session->set_flashdata('pesan', 'Data sudah ada (error)');
                return redirect('pengantin');
            }



            $data = array(
                'nama' => $this->input->post('nama'),
                'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                'tanggal_lahir' => $this->input->post('tanggal_lahir'),
                'nik' => $this->input->post('nik'),
                'agama' => $this->input->post('agama'),
                'kewarganegaraan' => $this->input->post('kewarganegaraan'),
                'pekerjaan' => $this->input->post('pekerjaan'),
                'alamat' => $this->input->post('alamat'),
            );
            $this->Pengantin->save($data);
            $this->session->set_flashdata('pesan', 'Berhasil menambahkan pengantin');
            return redirect('pengantin');
        }
    }
    public function show($id)
    {
        $data['pengantin'] = $this->Pengantin->find($id);
        show($this->view_show, $data);
    }
    public function edit($id)
    {
        $data['pengantin'] = $this->Pengantin->find($id);
        show($this->view_edit, $data);
    }
    public function update($id)
    {
        if($this->input->method() != 'post'){
            return redirect('pengantin');
        } 
        else 
        {
            $data = array(
                'nama' => $this->input->post('nama'),
                'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                'tanggal_lahir' => $this->input->post('tanggal_lahir'),
                'nik' => $this->input->post('nik'),
                'agama' => $this->input->post('agama'),
                'kewarganegaraan' => $this->input->post('kewarganegaraan'),
                'pekerjaan' => $this->input->post('pekerjaan'),
                'alamat' => $this->input->post('alamat'),
            );
            $this->Pengantin->update($id, $data);
            $this->session->set_flashdata('pesan', 'Berhasil! Mengubah pengantin');
            return redirect('pengantin');
        }
    }
    public function destroy($id)
    {
        $this->Pengantin->delete($id);
        return redirect('pengantin');
    }

}
