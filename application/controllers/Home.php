<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_kegiatan');       
    }
    

    public function index()
    {
        $data = array(
                        'title'     =>'WebGis Kawasan Transmigrasi',
                        'kegiatan'  => $this->m_kegiatan->lists(),
                        'isi'       => 'v_home'
                     );
        $this->load->view('layout/v_wrapper', $data, FALSE);
        
    }

    public function geojson()
    {
        $data = array(
                        'title'     =>'WebGis Kawasan Transmigrasi',
                        'kegiatan'  => $this->m_kegiatan->lists(),
                        'isi'       => 'v_geojson'
                     );
        $this->load->view('layout/v_wrapper', $data, FALSE);
        
    }

    public function pemetaan_json()
    {
        $kegiatan = $this->m_kegiatan->lists();
        echo json_encode($kegiatan);
    }

    public function detail($id_tempat)
    {
        $tempat=$this->m_tempat->detail($id_tempat);
        $data = array(
            'title'=>'WebGis Kawasan Transmigrasi SP.10',
            'title2'=>'Detail Tempat',
            'tempat'=>$tempat,
            'isi' => 'v_detail'
         );
        $this->load->view('layout/v_wrapper', $data, FALSE);
    }


    public function kegiatan_pertahun($tahun)
    {
        $data = array(
            'title'     =>'Kegiatan Fisik Per Tahun : '.$tahun,
            'kegiatan'  => $this->m_home->kegiatan_pertahun($tahun),
            'isi'       => 'v_home'
         );
        $this->load->view('layout/v_wrapper', $data, FALSE);
        //echo json_encode($data);
    }

    public function kegiatan_sumberdana($tahun,$id_sumberdana)
    {
        $kegiatan = $this->m_home->kegiatan_sumberdana($tahun,$id_sumberdana);
        $sumberdana    = $this->m_home->detailsumberdana($id_sumberdana);
        $data = array(
            'title'     =>'Kegiatan Fisik Per Tahun : <b>'.$tahun.'</b> <i class="ace-icon fa fa-angle-double-right"></i> Sumber Dana : <b>'.$sumberdana->sumber_dana.'</b>',
            'kegiatan'  => $kegiatan,
            'isi'       => 'v_home'
         );
        $this->load->view('layout/v_wrapper', $data, FALSE);
    }

}

/* End of file Home.php */

