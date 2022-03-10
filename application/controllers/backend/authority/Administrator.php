<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Administrator extends CI_Controller
{
    private $main_layout = '';
    private $side_menu = '';


    public function __construct()
    {
        parent::__construct();
        if (!isset($this->session->userdata['currentActiveId'])) {
            redirect('login');
        }
        $this->main_layout = 'backend/master_layout';
        $this->side_menu = 'backend/administrator/side_menu';
        // $this->load->model('User');
    }

    public function index()
    {
        $data = $this->engine->store_nav('dashboard', 'Nothing', 'Welcome to dashboard');

        $path = 'backend/administrator/dashboard';
        $this->engine->render_view($data, $path, $this->side_menu, $this->main_layout);
    }
}
