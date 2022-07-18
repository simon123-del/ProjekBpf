<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pernikahan extends CI_Model {
    
    private $table = 'pernikahan';

	public function all()
	{
		return $this->db->get($this->table);
	}

	public function pengantinnya()
	{
		return $this->db->query("SELECT * FROM `pengantin_pernikahan` JOIN pengantin ON pengantin.id_pengantin = pengantin_pernikahan.id_pengantin")->result_array();
	}


	public function save($data, $data_pengantin=null)
	{
		$this->db->insert($this->table, $data);	
		$row = $this->db->query('SELECT MAX(id_pernikahan) AS id_pernikahan FROM `pernikahan`')->row();
		$id_pernikahan = $row->id_pernikahan;

		$pengantin1 = array(
			'id_pernikahan' => $id_pernikahan,
			'id_pengantin' => $data_pengantin['id_pengantin1']
		);
		$pengantin2 = array(
			'id_pernikahan' => $id_pernikahan,
			'id_pengantin' => $data_pengantin['id_pengantin2']
		);
		$this->db->insert('pengantin_pernikahan', $pengantin1);
		return $this->db->insert('pengantin_pernikahan', $pengantin2);
	}

	public function find($id)
	{	
	
		return $this->db->get_where($this->table, array('id_pernikahan' => $id))->row();
        //return $this->db->row();
		//return $this->db->get_where($this->table, array('id_kategori' => $id))->row();
	}

	public function pengantin_pernikahan($id)
	{
        $this->db->select('penj.*, penj.id_pernikahan AS id_pernikahan, pr.*, pp.*');
		$this->db->from('pernikahan AS penj');
		$this->db->where('penj.id_pernikahan', $id);
        $this->db->join('pengantin_pernikahan AS pp', 'pp.id_pernikahan = penj.id_pernikahan', 'INNER');
        $this->db->join('pengantin AS pr', 'pr.id_pengantin = pp.id_pengantin', 'INNER');
        return $this->db->get()->result();
	}

	public function delete($id)
	{	
		$this->db->where('id_pernikahan', $id);	
		$this->db->delete('pengantin_pernikahan');
		$this->db->where('id_pernikahan', $id);
		return $this->db->delete($this->table);
	}


}
