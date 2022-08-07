<?php

class biayapembangunan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_biayapembangunan');
    }

    public function index()
    {
        $data = array(
            'title'  => 'Halaman Data Biaya Pembukaan Lahan',
            'biayapembangunan' => $this->m_biayapembangunan->tampil(),
            'isi'    => 'anggaran/v_databiayapembangunan'
        );
        $this->load->view('layout/v_wrapper', $data, FALSE);
    }

    public function add()
    {
        $this->user_login->cek_login();
        $this->form_validation->set_rules('jenis', 'Jenis Pembangunan', 'required', array(
            'required' => '%s Harus Diisi !!!'
        ));
        $this->form_validation->set_rules('volume', 'Volume (Unit)', 'required', array(
            'required' => '%s Harus Diisi !!!'
        ));
        $this->form_validation->set_rules('satuan', 'Satuan', 'required', array(
            'required' => '%s Harus Diisi !!!'
        ));
        $this->form_validation->set_rules('harga_satuan', 'Harga Satuan(Rp)', 'required', array(
            'required' => '%s Harus Diisi !!!'
         ));
        $this->form_validation->set_rules('jumlah_harga', 'Jumlah Harga(Rp)', 'required', array(
            'required' => '%s Harus Diisi !!!'
        ));
          $this->form_validation->set_rules('ket', 'Keterangan', 'required', array(
            'required' => '%s Harus Diisi !!!'
        ));

        if ($this->form_validation->run() == FALSE) {
            $data = array(
                'title' => 'Input Data Biaya Pembukaan Lahan',
                'isi'   => 'anggaran/v_add'
            );
            $this->load->view('layout/v_wrapper', $data, FALSE);
        } else {
            $data = array(
                'jenis'          => $this->input->post('jenis'),
                'volume'         => $this->input->post('volume'),
                'satuan'         => $this->input->post('satuan'),
                'harga_satuan'   => $this->input->post('harga_satuan'),
                'jumlah_harga'   => $this->input->post('jumlah_harga'),
                'ket'            => $this->input->post('ket'),
            );
            $this->m_biayapembangunan->add($data);
            $this->session->set_flashdata('pesan', 'Data Berhasil di Simpan');
            redirect('biayapembangunan');
        }
    }


    public function edit($id_biaya)
    {
        $this->user_login->cek_login();
         $this->form_validation->set_rules('jenis', 'Jenis Pembangunan', 'required', array(
            'required' => '%s Harus Diisi !!!'
        ));
        $this->form_validation->set_rules('volume', 'Volume (Unit)', 'required', array(
            'required' => '%s Harus Diisi !!!'
        ));
        $this->form_validation->set_rules('satuan', 'Satuan', 'required', array(
            'required' => '%s Harus Diisi !!!'
        ));
        $this->form_validation->set_rules('harga_satuan', 'Harga Satuan(Rp)', 'required', array(
            'required' => '%s Harus Diisi !!!'
         ));
        $this->form_validation->set_rules('jumlah_harga', 'Jumlah Harga(Rp)', 'required', array(
            'required' => '%s Harus Diisi !!!'
        ));
          $this->form_validation->set_rules('ket', 'Keterangan', 'required', array(
            'required' => '%s Harus Diisi !!!'
        ));
        if ($this->form_validation->run() == FALSE) {
            $data = array(
                'title' => 'Edit Data Biaya Pembukaan Lahan',
                'biayapembangunan'  => $this->m_biayapembangunan->detail($id_biaya),
                'isi'   => 'anggaran/v_edit'
            );
            $this->load->view('layout/v_wrapper', $data, FALSE);
        } else {
            $data = array(
                'id_biaya'      =>  $id_biaya,
                'jenis'          => $this->input->post('jenis'),
                'volume'         => $this->input->post('volume'),
                'satuan'         => $this->input->post('satuan'),
                'harga_satuan'   => $this->input->post('harga_satuan'),
                'jumlah_harga'   => $this->input->post('jumlah_harga'),
                'ket'            => $this->input->post('ket'),
            );
            $this->m_biayapembangunan->edit($data);
            $this->session->set_flashdata('pesan', 'Data Berhasil di Simpan');
            redirect('biayapembangunan');
        }
    }

    public function delete($id_biaya)
    {
        $this->user_login->cek_login();
        $data = array('id_biaya' => $id_biaya);
        $this->m_biayapembangunan->delete($data);
        $this->session->set_flashdata('pesan', 'Data Berhasil di Hapus !!!');
        redirect('biayapembangunan');
    }
}
