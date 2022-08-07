<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_gallery extends CI_Model {

	public function lists()
	{
		$this->db->select('tbl_kegiatan.*,COUNT(tbl_gallery.id_kegiatan) as total_foto');
		$this->db->from('tbl_kegiatan');
		$this->db->join('tbl_gallery', 'tbl_gallery.id_kegiatan = tbl_kegiatan.id_kegiatan', 'left');
		$this->db->group_by('tbl_kegiatan.id_kegiatan');
		$this->db->order_by('id_kegiatan','desc');
		return $this->db->get()->result();
	}

	public function detail($id_kegiatan)
	{
		$this->db->select('*');
		$this->db->from('tbl_kegiatan');
		$this->db->where('id_kegiatan', $id_kegiatan);		
		return $this->db->get()->row();
	}

	public function lists2($id_kegiatan)
	{
		$this->db->select('*');
		$this->db->from('tbl_gallery');
		$this->db->where('id_kegiatan', $id_kegiatan);		
		$this->db->order_by('id_gallery','desc');
		return $this->db->get()->result();
	}

	public function detail_gallery($id_gallery)
	{
		$this->db->select('*');
		$this->db->from('tbl_gallery');
		$this->db->where('id_gallery', $id_gallery);		
		return $this->db->get()->row();
	}

	public function add($data)
	{
		$this->db->insert('tbl_gallery', $data);
		
	}

	public function delete($data)
	{
		$this->db->where('id_gallery', $data['id_gallery']);
		$this->db->delete('tbl_gallery',$data);
	}

	///rubah lagi
	public function edit($data)
	{
		$this->db->where('id_gallery', $data['id_gallery']);
		$this->db->update('tbl_gallery',$data);
	}

	public function edit_sampul($data)
	{
		$this->db->where('id_kegiatan', $data['id_kegiatan']);
		$this->db->update('tbl_kegiatan',$data);
	}


}

/* End of file M_galley.php */
