<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Database extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_database');
    }

    public function index()
    {
        $data['Database'] = $this->m_database->getAllDatabase();
        $this->load->view('v_database', $data);
    }

    public function formTambah()
    {
        $this->load->view('form_tambah');
    }
    public function simpanData()
    {
        $this->m_database->inputData();
        redirect('database');
    }

    function hapus($NPSN){
        $this->m_database->hapus_data($NPSN);
        redirect('database');
    }
}