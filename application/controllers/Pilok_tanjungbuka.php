<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pilok_tanjungbuka extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_piloktanjungbuka');
    }
    

    public function index()
    {
        $data = array(
            'title'     =>'Halaman Pilok Tanjung Buka',
            'pilok_tanjungbuka'     => $this->m_piloktanjungbuka->tampil(),
            'isi' => 'pilok_tanjungbuka/v_lists'
         );
        $this->load->view('layout/v_wrapper', $data, FALSE);
    }

    public function add()
    {
        $this->user_login->cek_login();
        $this->form_validation->set_rules('letak_lokasi', 'Letak Lokasi','required',
        array('required' => '%s Harus Diisi'));
        $this->form_validation->set_rules('batas_lokasi', 'Batas Lokasi','required',
        array('required' => '%s Harus Diisi'));
        $this->form_validation->set_rules('pencapaian_lokasi', 'Pencapaian Lokasi','required',
        array('required' => '%s Harus Diisi'));
        $this->form_validation->set_rules('alokasi_lahan', 'Alokasi Lahan','required',
        array('required' => '%s Harus Diisi'));
        $this->form_validation->set_rules('pembangunan', 'Pembangunan','required',
        array('required' => '%s Harus Diisi'));

        if ($this->form_validation->run()==FALSE) {
            $data = array(
                'title'     =>'Add Data Pilok Tanjung Buka',
                'isi'       => 'pilok_tanjungbuka/v_add'
             );
            $this->load->view('layout/v_wrapper', $data, FALSE);
        }else{
            $data = array(
                        'letak_lokasi' => $this->input->post('letak_lokasi'),
                        'batas_lokasi' => $this->input->post('batas_lokasi'),
                        'pencapaian_lokasi' => $this->input->post('pencapaian_lokasi'),
                        'alokasi_lahan' => $this->input->post('alokasi_lahan'),
                        'pembangunan' => $this->input->post('pembangunan'),
             );
             $this->m_piloktanjungbuka->add($data);
             $this->session->set_flashdata('pesan', 'Data Berhasil Ditambahkan');
             redirect('pilok_tanjungbuka');
             
            
        }
    }

    public function edit($id_lokasi)
    {
        $this->user_login->cek_login();
        $this->form_validation->set_rules('letak_lokasi', 'Letak Lokasi','required',
        array('required' => '%s Harus Diisi'));
        $this->form_validation->set_rules('batas_lokasi', 'Batas Lokasi','required',
        array('required' => '%s Harus Diisi'));
        $this->form_validation->set_rules('pencapaian_lokasi', 'Pencapaian Lokasi','required',
        array('required' => '%s Harus Diisi'));
        $this->form_validation->set_rules('alokasi_lahan', 'Alokasi Lahan','required',
        array('required' => '%s Harus Diisi'));
         $this->form_validation->set_rules('pembangunan', 'Pembangunan','required',
        array('required' => '%s Harus Diisi'));

        if ($this->form_validation->run()==FALSE) {
            $data = array(
                'title'     =>'Edit Data Pilok Tanjung Buka',
                'pilok_tanjungbuka' =>$this->m_piloktanjungbuka->detail($id_lokasi),
                'isi'       => 'pilok_tanjungbuka/v_edit'
             );
            $this->load->view('layout/v_wrapper', $data, FALSE);
        }else{
            $data = array(
                        'id_lokasi'  =>$id_lokasi,
                        'letak_lokasi' => $this->input->post('letak_lokasi'),
                        'batas_lokasi' => $this->input->post('batas_lokasi'),
                        'pencapaian_lokasi' => $this->input->post('pencapaian_lokasi'),
                        'alokasi_lahan' => $this->input->post('alokasi_lahan'),
                        'pembangunan' => $this->input->post('pembangunan'),
             );
             $this->m_piloktanjungbuka->edit($data);
             $this->session->set_flashdata('pesan', 'Data Berhasil Diedit !!!');
             redirect('pilok_tanjungbuka');
             
            
        }
    }

    public function delete($id_lokasi)
    {
        $this->user_login->cek_login();
        $data = array('id_lokasi' => $id_lokasi );
        $this->m_piloktanjungbuka->delete($data);
        $this->session->set_flashdata('sukses', 'Data Berhasil Dihapus !!');
        redirect('Pilok_tanjungbuka');
    }

}

/* End of pilok_tanjungbuka.php */