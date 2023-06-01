<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengalaman extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('download');
        $this->load->library('pagination');
        $this->load->helper('cookie');
        $this->load->model('user_model');
    }

    public function index()
    {
        $data['title'] = 'User';
        $data['user'] = $this->user_model->data()->result();

        $this->load->view('templates/header', $data);
        $this->load->view('user/index');
        $this->load->view('templates/footer');
    }

}