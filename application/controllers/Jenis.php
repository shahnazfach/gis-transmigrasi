<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Jenis extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_jenis');
		
	}
	

	public function index()
	{
		$data = array(
			'title'		=>'Data Jenis Kegiatan',
			'jenis'=> $this->m_jenis->lists(),
			'isi' 		=> 'v_jenis'
		 );
		$this->load->view('layout/v_wrapper', $data, FALSE);
	}

	
	public function add()
	{
		$this->user_login->cek_login();
			$config['upload_path']   = './icon/';
            $config['allowed_types'] = 'png';
            $config['max_size']      = 1000;
            $this->upload->initialize($config);
            if(! $this->upload->do_upload('icon')) {
				$this->session->set_flashdata('error','File Di Upload Tidak Sesuai Dengai Ketentuan !!');
				redirect('jenis');			
			}else{
				$upload_data        		= array('uploads' =>$this->upload->data());
				$config['image_library']  	= 'gd2';
				$config['source_image']   	= './icon/'.$upload_data['uploads']['file_name'];				
				$this->load->library('image_lib', $config);
				$this->image_lib->resize();
				$i = $this->input;
	            $data = array(
								'jenis_kegiatan'	=> $i->post('jenis_kegiatan'),
								'icon'	=> $upload_data['uploads']['file_name'],
	                        	);
	            $this->m_jenis->add($data);
	            $this->session->set_flashdata('sukses',' Data Berhasil Ditambahkan !');
	            redirect('jenis');		           
			}				
	}

	public function edit($id_jenis)
	{
		$this->user_login->cek_login();
		$config['upload_path']   = './icon/';
            $config['allowed_types'] = 'png';
            $config['max_size']      = 1000;
            $this->upload->initialize($config);
            if(! $this->upload->do_upload('icon')) {
				$i = $this->input;
	            $data = array(
								'id_jenis' => $id_jenis,
	            				'jenis_kegiatan'	=> $i->post('jenis_kegiatan'),
	                        	);
	            $this->m_jenis->edit($data);
	            $this->session->set_flashdata('sukses',' Data Berhasil Diedit !');
	            redirect('jenis');				
			}else{
						//hapus gambar
				$jenis=$this->m_jenis->detail($id_jenis);
				if ($jenis->icon != "") {
					unlink('./icon/'.$jenis->icon);
				}
				//===========================
				$upload_data        		= array('uploads' =>$this->upload->data());
				$config['image_library']  	= 'gd2';
				$config['source_image']   	= './icon/'.$upload_data['uploads']['file_name'];				
				$this->load->library('image_lib', $config);
				$this->image_lib->resize();
				$i = $this->input;
	            $data = array(
								'id_jenis'	=>$id_jenis,
								'jenis_kegiatan'	=> $i->post('jenis_kegiatan'),
								'icon'	=> $upload_data['uploads']['file_name'],
	                        	);
	            $this->m_jenis->edit($data);
	            $this->session->set_flashdata('sukses',' Data Berhasil Ditambahkan !');
	            redirect('jenis');
			}	
					
	}

	public function delete($id_jenis)
	{
		$this->user_login->cek_login();		
			//hapus gambar
			$jenis=$this->m_jenis->detail($id_jenis);
			if ($jenis->icon != "") {
				unlink('./icon/'.$jenis->icon);
			}
			//===========================
				$i = $this->input;
	            $data = array(
								'id_jenis' => $id_jenis,
	                        	);
	            $this->m_jenis->delete($data);
	            $this->session->set_flashdata('sukses',' Data Berhasil Dihapus !');
	            redirect('jenis');		
	}

}

/* End of file jenis.php */

