<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Kegiatan extends CI_Controller {

	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_kegiatan');
		$this->load->model('m_jenis');
		$this->load->model('m_tahun');
		$this->load->model('m_sumberdana');
		$this->load->model('m_gallery');
	}
	

	public function index()
	{
		$data = array(
			'title'		=>'Data Kegiatan Fisik',
			'kegiatan' 	=> $this->m_kegiatan->lists(),
			'isi' => 'kegiatan/v_lists'
		 );
		$this->load->view('layout/v_wrapper', $data, FALSE);
	}

	public function add1()
	{
		$this->user_login->cek_login();
		$this->form_validation->set_rules('nama_kegiatan', 'Nama Kegiatan','required',
		array('required' => '%s Harus Diisi'));
		$this->form_validation->set_rules('id_jenis', 'Jenis Kegiatan','required',
		array('required' => '%s Harus Diisi'));
		$this->form_validation->set_rules('alamat', 'Alamat','required',
		array('required' => '%s Harus Diisi'));
		$this->form_validation->set_rules('id_sumberdana', 'Sumber Dana','required',
		array('required' => '%s Harus Diisi'));
		$this->form_validation->set_rules('anggaran', 'Anggaran','required',
		array('required' => '%s Harus Diisi'));
		$this->form_validation->set_rules('tahun', 'Tahun','required',
		array('required' => '%s Harus Diisi'));
		$this->form_validation->set_rules('volume', 'Volume','required',
		array('required' => '%s Harus Diisi'));
		$this->form_validation->set_rules('pelaksana', 'Pelaksana','required',
		array('required' => '%s Harus Diisi'));
		$this->form_validation->set_rules('latitude', 'Latitude','required',
		array('required' => '%s Harus Diisi'));
		$this->form_validation->set_rules('longitude', 'Longitude','required',
		array('required' => '%s Harus Diisi'));
		if ($this->form_validation->run()==FALSE) {
			$data = array(
				'title'		=>'Add Data Kegiatan',
				'jenis'		=>$this->m_jenis->lists(),
				'sumberdana'=>$this->m_sumberdana->lists(),
				'tahun'		=>$this->m_tahun->lists(),
				'isi' 		=> 'kegiatan/v_add1'
			 );
			$this->load->view('layout/v_wrapper', $data, FALSE);
		}else{
			$data = array(
						'nama_kegiatan' => $this->input->post('nama_kegiatan'),
						'id_jenis' => $this->input->post('id_jenis'),
						'alamat' => $this->input->post('alamat'),
						'id_sumberdana' => $this->input->post('id_sumberdana'),
						'anggaran' => $this->input->post('anggaran'),
						'latitude' => $this->input->post('latitude'),
						'longitude' => $this->input->post('longitude'),
						'tahun' => $this->input->post('tahun'),
						'volume' => $this->input->post('volume'),
						'pelaksana' => $this->input->post('pelaksana'),
						'tahun' => $this->input->post('tahun'),
						'deskripsi' => $this->input->post('deskripsi'),
			 );
			 $this->m_kegiatan->add($data);
			 $this->session->set_flashdata('pesan', 'Data Berhasil Ditambahkan');
			 redirect('kegiatan');
			 
			
		}
	}

	public function edit($id_kegiatan)
	{
		$this->user_login->cek_login();
		$this->form_validation->set_rules('nama_kegiatan', 'Nama Kegiatan','required',
		array('required' => '%s Harus Diisi'));
		$this->form_validation->set_rules('id_jenis', 'Jenis Kegiatan','required',
		array('required' => '%s Harus Diisi'));
		$this->form_validation->set_rules('alamat', 'Alamat','required',
		array('required' => '%s Harus Diisi'));
		$this->form_validation->set_rules('id_sumberdana', 'Sumber Dana','required',
		array('required' => '%s Harus Diisi'));
		$this->form_validation->set_rules('anggaran', 'Anggaran','required',
		array('required' => '%s Harus Diisi'));
		$this->form_validation->set_rules('tahun', 'Tahun','required',
		array('required' => '%s Harus Diisi'));
		$this->form_validation->set_rules('volume', 'Volume','required',
		array('required' => '%s Harus Diisi'));
		$this->form_validation->set_rules('pelaksana', 'Pelaksana','required',
		array('required' => '%s Harus Diisi'));
		$this->form_validation->set_rules('latitude', 'Latitude','required',
		array('required' => '%s Harus Diisi'));
		$this->form_validation->set_rules('longitude', 'Longitude','required',
		array('required' => '%s Harus Diisi'));
		if ($this->form_validation->run()==FALSE) {
			$data = array(
				'title'		=>'Edit Data Kegiatan',
				'jenis'		=>$this->m_jenis->lists(),
				'kegiatan'	=>$this->m_kegiatan->detail($id_kegiatan),
				'sumberdana'=>$this->m_sumberdana->lists(),
				'tahun'		=>$this->m_tahun->lists(),
				'isi' 		=> 'kegiatan/v_edit'
			 );
			$this->load->view('layout/v_wrapper', $data, FALSE);
		}else{
			$data = array(
						'id_kegiatan'	=>$id_kegiatan,
						'nama_kegiatan' => $this->input->post('nama_kegiatan'),
						'id_jenis' => $this->input->post('id_jenis'),
						'alamat' => $this->input->post('alamat'),
						'id_sumberdana' => $this->input->post('id_sumberdana'),
						'anggaran' => $this->input->post('anggaran'),
						'latitude' => $this->input->post('latitude'),
						'longitude' => $this->input->post('longitude'),
						'tahun' => $this->input->post('tahun'),
						'volume' => $this->input->post('volume'),
						'pelaksana' => $this->input->post('pelaksana'),
						'tahun' => $this->input->post('tahun'),
						'deskripsi' => $this->input->post('deskripsi'),
			 );
			 $this->m_kegiatan->edit($data);
			 $this->session->set_flashdata('pesan', 'Data Berhasil Diedit !!!');
			 redirect('kegiatan');
			 
			
		}
	}

	public function delete($id_kegiatan)
	{
		$this->user_login->cek_login();
		$data = array('id_kegiatan' => $id_kegiatan );
		$this->m_kegiatan->delete($data);
		$this->session->set_flashdata('sukses', 'Data Berhasil Dihapus !!');
		redirect('kegiatan');
	}

	public function detail($id_kegiatan)
	{
		$data = array(
			'title'		=> 'Detail Kegiatan Fisik',
			'kegiatan'	=> $this->m_kegiatan->detail($id_kegiatan),
			'gallery' 	=> $this->m_gallery->lists2($id_kegiatan),
			'isi' 		=> 'kegiatan/v_detail'
		 );
		$this->load->view('layout/v_wrapper', $data, FALSE);
	}

	public function lap()
	{
		$data = array(
						'title'		=> 'Rekap Laporan Kegiatan',
						'kegiatan' => $this->m_kegiatan->lists(),
						 'isi'		=> 'kegiatan/v_laporan'
					);
		$this->load->view('layout/v_wrapper',$data,FALSE);
	}

	public function laporan()
	{
		if ($this->input->post('tahun')=="All"){
			redirect('kegiatan/lap');
		}else{
			$tahun=$this->input->post('tahun');
			$data = array(
				'title'		=> 'Rekap Laporan Kegiatan',
				'kegiatan' => $this->m_kegiatan->lists_tahun($tahun),
				 'isi'		=> 'kegiatan/v_laporan'
			);
			$this->session->set_flashdata('tahun',$tahun);
			
			$this->load->view('layout/v_wrapper',$data,FALSE);
		}
	}

}

/* End of Kegiatan.php */


