<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_tentang extends CI_Model
{
    public function tampil()
    {
        $this->db->select('*');
        $this->db->from('tentang_transmigrasi');
        $this->db->order_by('id_transmigrasi', 'desc');
        return $this->db->get()->result();
    }

    public function add($data)
    {
        $this->db->insert('tentang_transmigrasi', $data);
    }

    public function detail($id_transmigrasi)
    {
        $this->db->select('*');
        $this->db->from('tentang_transmigrasi');
        $this->db->where('id_transmigrasi', $id_transmigrasi);

        return $this->db->get()->row();
    }

    public function edit($data)
    {
        $this->db->where('id_transmigrasi', $data['id_transmigrasi']);
        $this->db->update('tentang_transmigrasi', $data);
    }

    public function delete($data)
    {
        $this->db->where('id_transmigrasi', $data['id_transmigrasi']);
        $this->db->delete('tentang_transmigrasi', $data);
    }
}

/* End of file ModelName.php */
