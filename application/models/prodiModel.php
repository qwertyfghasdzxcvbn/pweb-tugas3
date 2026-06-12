<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class prodiModel extends CI_Model
{

   public function getAll()
	{
        return $this->db->select('prodi.*, fakultas.fakultas')
                    ->join('fakultas', 'fakultas.fakultas_id = prodi.fakultas_id', 'left')
                    ->order_by('prodi.prodi_id', 'DESC')
                    ->get('prodi')
                    ->result_array();
	}

	public function getById($id)
	{
		return $this->db->get_where('prodi', ['prodi_id' => $id])->row_array();
	}

	public function insert($data)
	{
		return $this->db->insert('prodi', $data);
	}

	public function update($id, $data)
	{
		$this->db->where('prodi_id', $id);
		return $this->db->update('prodi', $data);
	}

	public function delete($id)
	{
		$this->db->where('prodi_id', $id);
		return $this->db->delete('prodi');
	}

}

