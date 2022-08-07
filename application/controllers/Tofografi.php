<?php

class Tofografi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_tofografi');
    }

    public function index()
    {
        $data = array(
            'title'  => 'Halaman Tofografi',
            'tofografi' => $this->m_tofografi->tampil(),
            'isi'    => 'tofografi/v_datatofografi'
        );
        $this->load->view('layout/v_wrapper', $data, FALSE);
    }

    public function add()
    {
        $this->user_login->cek_login();
        $this->form_validation->set_rules('simbol', 'Simbol', 'required', array(
            'required' => '%s Harus Diisi !!!'
        ));
        $this->form_validation->set_rules('kemiringan_lahan', 'Kemiringan Lahan', 'required', array(
            'required' => '%s Harus Diisi !!!'
        ));
        $this->form_validation->set_rules('bentuk_lahan', 'Bentuk Lahan', 'required', array(
            'required' => '%s Harus Diisi !!!'
        ));
        $this->form_validation->set_rules('luas_Ha', 'Luas (Ha)', 'required', array(
            'required' => '%s Harus Diisi !!!'
         ));
        $this->form_validation->set_rules('luas_persen', 'Luas Persen (%)', 'required', array(
            'required' => '%s Harus Diisi !!!'
        ));

        if ($this->form_validation->run() == FALSE) {
            $data = array(
                'title' => 'Input Data Tofografi',
                'isi'   => 'tofografi/v_input_datatofografi'
            );
            $this->load->view('layout/v_wrapper', $data, FALSE);
        } else {
            $data = array(
                'simbol'  => $this->input->post('simbol'),
                'kemiringan_lahan'     => $this->input->post('kemiringan_lahan'),
                'bentuk_lahan'   => $this->input->post('bentuk_lahan'),
                'luas_Ha'   => $this->input->post('luas_Ha'),
                'luas_persen'   => $this->input->post('luas_persen'),
            );
            $this->m_tofografi->simpan($data);
            $this->session->set_flashdata('pesan', 'Data Berhasil di Simpan');
            redirect('tofografi/input');
        }
    }


    public function edit($id_tabelmiring)
    {
        $this->user_login->cek_login();
       $this->form_validation->set_rules('simbol', 'Simbol', 'required', array(
            'required' => '%s Harus Diisi !!!'
        ));
        $this->form_validation->set_rules('kemiringan_lahan', 'Kemiringan Lahan', 'required', array(
            'required' => '%s Harus Diisi !!!'
        ));
        $this->form_validation->set_rules('bentuk_lahan', 'Bentuk Lahan', 'required', array(
            'required' => '%s Harus Diisi !!!'
        ));
        $this->form_validation->set_rules('luas_Ha', 'Luas (Ha)', 'required', array(
            'required' => '%s Harus Diisi !!!'
         ));
        $this->form_validation->set_rules('luas_persen', 'Luas Persen (%)', 'required', array(
            'required' => '%s Harus Diisi !!!'
        ));

        if ($this->form_validation->run() == FALSE) {
            $data = array(
                'title' => 'Edit Halaman Tofografi',
                'tofografi'  => $this->m_tofografi->detail($id_tabelmiring),
                'isi'   => 'tofografi/v_edit_datatofografi'
            );
            $this->load->view('layout/v_wrapper', $data, FALSE);
        } else {
            $data = array(
                'id_tabelmiring'    => $this->input->post('id_tabelmiring'),
                'simbol'            => $this->input->post('simbol'),
                'kemiringan_lahan'  => $this->input->post('kemiringan_lahan'),
                'bentuk_lahan'      => $this->input->post('bentuk_lahan'),
                'luas_Ha'           => $this->input->post('luas_Ha'),
                'luas_persen'       => $this->input->post('luas_persen'),
            );
            $this->m_tofografi->edit($data);
            $this->session->set_flashdata('pesan', 'Data Berhasil di Simpan');
            redirect('tofografi');
        }
    }

    public function hapus($id_tabelmiring)
    {
        $this->user_login->cek_login();
        $data = array('id_tabelmiring' => $id_tabelmiring);
        $this->m_tofografi->hapus($data);
        $this->session->set_flashdata('pesan', 'Data Berhasil di Hapus !!!');
        redirect('tofografi');
    }
}
