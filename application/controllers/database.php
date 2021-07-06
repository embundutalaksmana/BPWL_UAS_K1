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
}