<?php


defined('BASEPATH') or exit('No direct script access allowed');

class users extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        if (empty($this->session->userdata('login'))) {
            redirect('auth');
        }

        $this->load->model('m_users');
    }

    public function index()
    {
        $data['title'] = "Manajemen Data Users";

        $data['users'] = $this->m_users->view_data()->result_array();

        $this->load->view('v_header', $data);
        $this->load->view('users/v_data', $data);
        $this->load->view('v_footer');
    }

    function add()
    {
        $data['title'] = "Tambah Data Users";

        $this->load->view('v_header', $data);
        $this->load->view('users/v_add');
        $this->load->view('v_footer');
    }

    function add_action()
    {
        $username = $this->input->post('username');
        $password = md5($this->input->post('password'));
        $nama_lengkap = $this->input->post('nama_lengkap');

        $data = array(
            'username' => $username,
            'password' => $password,
            'nama_lengkap' => $nama_lengkap
        );

        $this->m_users->insert_data($data);

        redirect('users');
    }

    function edit()
    {
        $data['title'] = "Edit Data Users";

        $this->load->view('v_header', $data);
        $this->load->view('users/v_edit', $data);
        $this->load->view('v_footer');
    }

    function update()
    {
        $data['title'] = "Update Data Users";

        $this->load->view('v_header', $data);
        $this->load->view('users/v_update', $data);
        $this->load->view('v_footer');
    }
}
    
    /* End of file users.php */
