<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Users extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if (!isset($this->session->userdata['currentActiveId'])){
            redirect('login'); }		
        // $this->load->model('User');
    }

    public function index()
    {
        echo 'I am USer.';
    }
}
