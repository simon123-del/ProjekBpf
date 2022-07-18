<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PernikahanController extends CI_Controller {
    	public function __construct()
    {
        parent::__construct();
		if (!$this->session->login == true){
			redirect('login');
		}
	}
	
    private $view_index = 'pernikahan/index';
    private $view_show = 'pernikahan/show';
    private $view_create = 'pernikahan/create';
    private $view_edit = 'pernikahan/edit';

    public function index()
    {
        $data['pernikahan_pernikahan'] = $this->Pernikahan->all();
        $data['pengantinnya'] = $this->Pernikahan->pengantinnya();
        show($this->view_index, $data);
    }
    public function create()
    {
        $data['semua_pengantin_pria'] = $this->Pengantin->all_gender('pria');
        $data['semua_pengantin_wanita'] = $this->Pengantin->all_gender('wanita');
        show($this->view_create, $data);
    }

    public function store()
    {
        if($this->input->method() != 'post')
        {
            return $this->create();
        } 
        else 
        {
            $data = array(
                'pemohon' => $this->input->post('pemohon'),
                'tanggal_pernikahan' => $this->input->post('tanggal_pernikahan'),
            );

            $data_pengantin = array(
                'id_pengantin1' => $this->input->post('id_pengantin1'),
                'id_pengantin2' => $this->input->post('id_pengantin2'),
            );
            
            $this->Pernikahan->save($data, $data_pengantin);
            $this->session->set_flashdata('pesan', 'Berhasil!');
            return redirect('pernikahan');
        }
    }

    public function acc($id){
        $this->db->where('id_pernikahan', $id);
        $this->db->set('acc', 1);
        $this->db->update('pernikahan');
        redirect('pernikahan');
    }

    public function show($id)
    {
        $data['pernikahan'] = $this->Pernikahan->find($id);
        $data['pengantin_pengantin'] = $this->Pernikahan->pengantin_pernikahan($id);
        show($this->view_show, $data);
    }

    public function destroy($id)
    {
        $this->Pernikahan->delete($id);
        return redirect('pernikahan');
    }
}
