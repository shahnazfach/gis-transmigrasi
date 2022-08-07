<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_biayapembangunan extends CI_Model
{
    public function tampil()
    {
        $this->db->select('*');
        $this->db->from('biayapembangunan');
        $this->db->order_by('id_biaya', 'desc');
        return $this->db->get()->result();
    }

    public function add($data)
    {
        $this->db->insert('biayapembangunan', $data);
    }

    public function detail($id_biaya)
    {
        $this->db->select('*');
        $this->db->from('biayapembangunan');
        $this->db->where('id_biaya', $id_biaya);

        return $this->db->get()->row();
    }

    public function edit($data)
    {
        $this->db->where('id_biaya', $data['id_biaya']);
        $this->db->update('biayapembangunan', $data);
    }

    public function delete($data)
    {
        $this->db->where('id_biaya', $data['id_biaya']);
        $this->db->delete('biayapembangunan', $data);
    }
}

/* End of file ModelName.php */
