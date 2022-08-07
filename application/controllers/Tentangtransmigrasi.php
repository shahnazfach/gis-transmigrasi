<?php

class Tentangtransmigrasi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_tentang');
    }

    public function index()
    {
        $data = array(
            'title'  => 'Halaman Tentang Transmigrasi',
            'tentangtransmigrasi' => $this->m_tentang->tampil(),
            'isi'    => 'about/v_datatentangtransmigrasi'
        );
        $this->load->view('layout/v_wrapper', $data, FALSE);
    }

    public function add()
    {
        $this->user_login->cek_login();
        $this->form_validation->set_rules('transmigrasi', 'Transmigrasi', 'required', array(
            'required' => '%s Harus Diisi !!!'
        ));
        $this->form_validation->set_rules('sejarah', 'Sejarah', 'required', array(
            'required' => '%s Harus Diisi !!!'
        ));
        $this->form_validation->set_rules('tujuan', 'Tujuan', 'required', array(
            'required' => '%s Harus Diisi !!!'
        ));
        $this->form_validation->set_rules('syarat_transmigran', 'Syarat Transmigran', 'required', array(
            'required' => '%s Harus Diisi !!!'
        ));

        if ($this->form_validation->run() == FALSE) {
            $data = array(
                'title' => 'Input Data Tentang Transmigrasi',
                'isi'   => 'about/v_add'
            );
            $this->load->view('layout/v_wrapper', $data, FALSE);
        } else {
            $data = array(
                'transmigrasi'  => $this->input->post('transmigrasi'),
                'sejarah'     => $this->input->post('sejarah'),
                'tujuan'   => $this->input->post('tujuan'),
                'syarat_transmigran'   => $this->input->post('syarat_transmigran'),
            );
            $this->m_tentang->add($data);
            $this->session->set_flashdata('pesan', 'Data Berhasil di Simpan');
            redirect('tentangtransmigrasi');
        }
    }


    public function edit($id_transmigrasi)
    {
        $this->user_login->cek_login();
         $this->form_validation->set_rules('transmigrasi', 'Transmigrasi', 'required', array(
            'required' => '%s Harus Diisi !!!'
        ));
        $this->form_validation->set_rules('sejarah', 'Sejarah', 'required', array(
            'required' => '%s Harus Diisi !!!'
        ));
        $this->form_validation->set_rules('tujuan', 'Tujuan', 'required', array(
            'required' => '%s Harus Diisi !!!'
        ));
        $this->form_validation->set_rules('syarat_transmigran', 'Syarat Transmigran', 'required', array(
            'required' => '%s Harus Diisi !!!'
        ));

        if ($this->form_validation->run() == FALSE) {
            $data = array(
                'title' => 'Edit Halaman Tentang Transmigrasi',
                'tentangtransmigrasi'  => $this->m_tentang->detail($id_transmigrasi),
                'isi'   => 'about/v_edit'
            );
            $this->load->view('layout/v_wrapper', $data, FALSE);
        } else {
            $data = array(
                'id_transmigrasi'      => $id_transmigrasi,
                'transmigrasi'         => $this->input->post('transmigrasi'),
                'sejarah'              => $this->input->post('sejarah'),
                'tujuan'               => $this->input->post('tujuan'),
                'syarat_transmigran'   => $this->input->post('syarat_transmigran'),
            );
            $this->m_tentang->edit($data);
            $this->session->set_flashdata('pesan', 'Data Berhasil di Simpan');
            redirect('tentangtransmigrasi');
        }
    }

    public function delete($id_transmigrasi)
    {
        $this->user_login->cek_login();
        $data = array('id_transmigrasi' => $id_transmigrasi);
        $this->m_tentang->delete($data);
        $this->session->set_flashdata('pesan', 'Data Berhasil di Hapus !!!');
        redirect('tentangtransmigrasi');
    }
}
