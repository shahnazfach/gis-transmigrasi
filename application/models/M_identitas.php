<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_identitas extends CI_Model
{
    public function tampil()
    {
        $this->db->select('*');
        $this->db->from('identitas');
        $this->db->order_by('id_identitas', 'desc');
        return $this->db->get()->result();
    }

    public function add($data)
    {
        $this->db->insert('identitas', $data);
    }

    public function detail($id_identitas)
    {
        $this->db->select('*');
        $this->db->from('identitas');
        $this->db->where('id_identitas', $id_identitas);

        return $this->db->get()->row();
    }

    public function edit($data)
    {
        $this->db->where('id_identitas', $data['id_identitas']);
        $this->db->update('identitas', $data);
    }

    public function delete($data)
    {
        $this->db->where('id_identitas', $data['id_identitas']);
        $this->db->delete('identitas', $data);
    }
}

/* End of file ModelName.php */
