<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Identitas extends CI_Controller {

	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_identitas');
	}
	

	public function index()
	{
		$data = array(
			'title'		=>'Data Identitas Website',
			'identitas' 	=> $this->m_identitas->tampil(),
			'isi' => 'identitas/v_lists'
		 );
		$this->load->view('layout/v_wrapper', $data, FALSE);
	}

	public function add()
	{
		$this->user_login->cek_login();
		$this->form_validation->set_rules('judul_website', 'Judul Website','required',
		array('required' => '%s Harus Diisi'));
		$this->form_validation->set_rules('alamat', 'Alamat','required',
		array('required' => '%s Harus Diisi'));
		$this->form_validation->set_rules('email', 'Email','required',
		array('required' => '%s Harus Diisi'));
		$this->form_validation->set_rules('telp', 'Telepon','required',
		array('required' => '%s Harus Diisi'));

		if ($this->form_validation->run()==FALSE) {
			$data = array(
				'title'		=>'Add Data Identitas',
				'isi' 		=> 'identitas/v_add'
			 );
			$this->load->view('layout/v_wrapper', $data, FALSE);
		}else{
			$data = array(
						'judul_website' => $this->input->post('judul_website'),
						'alamat' => $this->input->post('alamat'),
						'email' => $this->input->post('email'),
						'telp' => $this->input->post('telp'),
			 );
			 $this->m_identitas->add($data);
			 $this->session->set_flashdata('pesan', 'Data Berhasil Ditambahkan');
			 redirect('identitas');
			 
			
		}
	}

	public function edit($id_identitas)
	{
		$this->user_login->cek_login();
		$this->form_validation->set_rules('judul_website', 'Judul Website','required',
		array('required' => '%s Harus Diisi'));
		$this->form_validation->set_rules('alamat', 'Jenis Kegiatan','required',
		array('required' => '%s Harus Diisi'));
		$this->form_validation->set_rules('email', 'Email','required',
		array('required' => '%s Harus Diisi'));
		$this->form_validation->set_rules('telp', 'Telepon','required',
		array('required' => '%s Harus Diisi'));

		if ($this->form_validation->run()==FALSE) {
			$data = array(
				'title'		=>'Edit Data Identitas',
				'identitas'	=>$this->m_identitas->detail($id_identitas),
				'isi' 		=> 'identitas/v_edit'
			 );
			$this->load->view('layout/v_wrapper', $data, FALSE);
		}else{
			$data = array(
						'id_identitas'	=>$id_identitas,
						'judul_website' => $this->input->post('judul_website'),
						'alamat' => $this->input->post('alamat'),
						'email' => $this->input->post('email'),
						'telp' => $this->input->post('telp'),
			 );
			 $this->m_identitas->edit($data);
			 $this->session->set_flashdata('pesan', 'Data Berhasil Diedit !!!');
			 redirect('identitas');
			 
			
		}
	}

	public function delete($id_identitas)
	{
		$this->user_login->cek_login();
		$data = array('id_identitas' => $id_identitas );
		$this->m_identitas->delete($data);
		$this->session->set_flashdata('sukses', 'Data Berhasil Dihapus !!');
		redirect('identitas');
	}

}

/* End of identitas.php */