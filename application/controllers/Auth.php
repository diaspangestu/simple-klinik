<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->model('login_model');
    }

    public function index()
    {
        $this->load->view('v_login');
    }

    public function login_action()
    {
        $user = $this->input->post('username');
        $pass = md5($this->input->post('password'));

        // Rule Validation
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() != FALSE) {
            $data = array(
                'username' => $user,
                'password' => $pass
            );

            $checkLogin = $this->login_model->check_login($data)->num_rows();

            if ($checkLogin > 0) {
                $sess_data = array(
                    'login' => 'OK',
                    'username' => $user
                );

                $this->session->set_userdata($sess_data);

                redirect(base_url());
            } else {
                redirect('auth');
            }
        } else {
            $this->load->view('v_login');
        }
    }

    public function logout_action()
    {
        $this->session->sess_destroy();
        redirect('auth');
    }
}
    /* End of file Dashboard.php */
