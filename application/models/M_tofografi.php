<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_tofografi extends CI_Model
{
    public function tampil()
    {
        $this->db->select('*');
        $this->db->from('kondisi_fisik_lahan');
        $this->db->order_by('id_tabelmiring', 'desc');
        return $this->db->get()->result();
    }

    public function simpan($data)
    {
        $this->db->insert('kondisi_fisik_lahan', $data);
    }

    public function detail($id_tabelmiring)
    {
        $this->db->select('*');
        $this->db->from('kondisi_fisik_lahan');
        $this->db->where('id_tabelmiring', $id_tabelmiring);

        return $this->db->get()->row();
    }

    public function edit($data)
    {
        $this->db->where('id_tabelmiring', $data['id_tabelmiring']);
        $this->db->update('kondisi_fisik_lahan', $data);
    }

    public function hapus($data)
    {
        $this->db->where('id_tabelmiring', $data['id_tabelmiring']);
        $this->db->delete('kondisi_fisik_lahan', $data);
    }
}

/* End of file ModelName.php */
