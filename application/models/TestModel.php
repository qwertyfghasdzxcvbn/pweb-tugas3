<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TestModel extends CI_Model {
    public function getAll()
	{
        return $this->db->get('mahasiswa')->result_array();
	}

	public function getById($id)
	{
		return $this->db->get_where('mahasiswa', ['mahasiswa_id' => $id])->row_array();
	}

	public function insert($data)
	{
		return $this->db->insert('mahasiswa', $data);
	}

	public function update($id, $data)
	{
		$this->db->where('mahasiswa_id', $id);
		return $this->db->update('mahasiswa', $data);
	}

	public function delete($id)
	{
		$this->db->where('mahasiswa_id', $id);
		return $this->db->delete('mahasiswa');
	}
}