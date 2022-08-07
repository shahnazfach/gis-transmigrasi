<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_piloktanjungbuka extends CI_Model
{
    public function tampil()
    {
        $this->db->select('*');
        $this->db->from('pilok_tanjungbuka');
        $this->db->order_by('id_lokasi', 'desc');
        return $this->db->get()->result();
    }

    public function add($data)
    {
        $this->db->insert('pilok_tanjungbuka', $data);
    }

    public function detail($id_lokasi)
    {
        $this->db->select('*');
        $this->db->from('pilok_tanjungbuka');
        $this->db->where('id_lokasi', $id_lokasi);

        return $this->db->get()->row();
    }

    public function edit($data)
    {
        $this->db->where('id_lokasi', $data['id_lokasi']);
        $this->db->update('pilok_tanjungbuka', $data);
    }

    public function delete($data)
    {
        $this->db->where('id_lokasi', $data['id_lokasi']);
        $this->db->delete('pilok_tanjungbuka', $data);
    }
}

/* End of file ModelName.php */
