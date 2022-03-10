<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('User');
    }





    public function index()
    {
        $company_info = array(
            'tittle' => 'Welcome to <b>Codeigniter</b><i class="fas fa-hand-point-right ml-4"></i>',
        );
        $data['site_info'] = $company_info;
        $this->load->view('backend/login/login_view', $data);
    }

    public function authentication_process()
    {
        $userType = 1;
        $userinformation = $this->set_login_information($this->secure_data(), $userType);
        $res = $this->User->user_validation("authority", $userinformation);
        $confirm = set_confirmation_msg($res, "Login Success", "Email and Password not match");
        if ($confirm == 1) {
            $this->sessionStore($res);
            if ($res->user_type == 1) {
                redirect('administrator', 'location');
            }
        } else {
            $this->session->set_flashdata('login_failed', 'Credential Not match');
            redirect('login', 'location');
        }
    }

    private function sessionStore($res)
    {
        $this->session->set_userdata('currentActiveId', $res->id);
        $this->session->set_userdata('current_credential', $res->credential);
        $this->session->set_userdata('current_type', $res->user_type);
        $this->session->set_userdata('current_cash_on_hand', $res->cash_on_hand);
    }




    private function set_login_information($input_validation, $userType)
    {
        if ($input_validation) {
        } else {
            set_confirmation_msg("", "", "Please The Valid Data");
            redirect('Welcome', 'location');
        }
        $userinformation = array(
            'credential' => $this->input->post('number'),
            'a_key' => md5($this->input->post('password')),
            //'user_type' => $userType,
            'status' => 1
        );
        return $userinformation;
    }


    private function secure_data()
    {
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        $this->form_validation->set_rules('number', 'Number', 'trim|required');
        if ($this->form_validation->run() === FALSE) {
            return 0;
        } else {
            return TRUE;
        }
    }





    public function user_logout()
    {
        $this->session->unset_userdata('currentActiveId');
        $this->session->sess_destroy();
        redirect('login', 'location');
    }
}
