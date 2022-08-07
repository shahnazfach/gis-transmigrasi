<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_kegiatan extends CI_Model {

	public function lists()
	{
		$this->db->select('*');
		$this->db->from('tbl_kegiatan');
		$this->db->join('tbl_jenis', 'tbl_jenis.id_jenis = tbl_kegiatan.id_jenis', 'left');
		$this->db->join('tbl_sumberdana', 'tbl_sumberdana.id_sumberdana = tbl_kegiatan.id_sumberdana', 'left');
		$this->db->order_by('id_kegiatan', 'desc');
		return $this->db->get()->result();		
	}

	public function lists_tahun($tahun)
	{
		$this->db->select('*');
		$this->db->from('tbl_kegiatan');
		$this->db->join('tbl_jenis', 'tbl_jenis.id_jenis = tbl_kegiatan.id_jenis', 'left');
		$this->db->join('tbl_sumberdana', 'tbl_sumberdana.id_sumberdana = tbl_kegiatan.id_sumberdana', 'left');
		$this->db->where('tahun', $tahun);		
		$this->db->order_by('id_kegiatan', 'desc');
		return $this->db->get()->result();		
	}

	public function detail($id_kegiatan)
	{
		$this->db->select('*');
		$this->db->from('tbl_kegiatan');
		$this->db->join('tbl_jenis', 'tbl_jenis.id_jenis = tbl_kegiatan.id_jenis', 'left');
		$this->db->join('tbl_sumberdana', 'tbl_sumberdana.id_sumberdana = tbl_kegiatan.id_sumberdana', 'left');
		$this->db->where('id_kegiatan', $id_kegiatan);
		return $this->db->get()->row();		
	}

	public function add($data)
	{
		$this->db->insert('tbl_kegiatan', $data);
		
	}
	
	public function delete($data)
	{
	   $this->db->where('id_kegiatan',$data['id_kegiatan']);
	   $this->db->delete('tbl_kegiatan',$data);
	}

	
	public function edit($data)
	{
	   $this->db->where('id_kegiatan',$data['id_kegiatan']);
	   $this->db->update('tbl_kegiatan',$data);
	}

	
	

}

/* End of file kegiatan.php */
