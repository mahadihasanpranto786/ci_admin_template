<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
    public function index()
    {
        // $this->load->view('welcome_message');
        redirect('login'); 
    }

    public function dashboard()
    {
        // echo "Hello World";
        $this->load->view('home_view/header');
        $this->load->view('home_view/home');
        $this->load->view('home_view/footer');
    }

    public function user_dashboard()
    {
        // echo "Hello World";
        $this->load->view('user_view/header');
        $this->load->view('user_view/home');
        $this->load->view('user_view/footer');
    }

    public function dashboard_1()
    {
        $this->load->view('dashboard_1/header');
        $this->load->view('dashboard_1/home');
        $this->load->view('dashboard_1/footer');
    }

    public function dashboard_2()
    {
        $this->load->view('dashboard_2/header');
        $this->load->view('dashboard_2/home');
        $this->load->view('dashboard_2/footer');
    }

    public function dashboard_3()
    {
        $this->load->view('dashboard_3/header');
        $this->load->view('dashboard_3/home');
        $this->load->view('dashboard_3/footer');
    }

    public function admin_view()
    {
        $this->load->view('home_view/header');
        $this->load->view('admin_view/add_admin_profile');
        $this->load->view('home_view/footer');
    }
}
