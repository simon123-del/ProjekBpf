<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengantin extends CI_Model {
    
    private $table = 'pengantin';

	public function all()
	{
		return $this->db->get($this->table);
	}

	public function all_gender($gender = 'pria')
	{
		$this->db->where('jenis_kelamin', $gender);
		return $this->db->get($this->table);
	}

	public function save($data)
	{
		return $this->db->insert($this->table, $data);	
	}

	public function find($id)
	{	
		$this->db->select('*');
        $this->db->from('pengantin');
		$this->db->where('id_pengantin', $id);
        return $this->db->get()->row();
		//return $this->db->get_where($this->table, array('id_kategori' => $id))->row();
	}

	public function update($id, $data)
	{	
		$this->db->where('id_pengantin', $id);
		return $this->db->update($this->table, $data);
	}


	public function delete($id)
	{	
		$this->db->where('id_pengantin', $id);
		return $this->db->delete($this->table);
	}


}
