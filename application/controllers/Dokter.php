<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Dokter extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        if (empty($this->session->userdata('login'))) {
            redirect('auth');
        }

        $this->load->model('m_dokter');
    }

    public function index()
    {
        $data['title'] = "Manajemen Data Dokter";

        $data['dokter'] = $this->m_dokter->view_data()->result_array();

        $this->load->view('v_header', $data);
        $this->load->view('dokter/v_data', $data);
        $this->load->view('v_footer');
    }

    function add()
    {
        $data['title'] = "Tambah Data dokter";

        $this->load->view('v_header', $data);
        $this->load->view('dokter/v_add');
        $this->load->view('v_footer');
    }

    function add_action()
    {
        $nama_dokter = $this->input->post('nama_dokter');

        $data = array(
            'nama_dokter' => $nama_dokter
        );

        $this->m_dokter->insert_data($data);

        redirect('dokter');
    }

    function edit($id)
    {
        $data['title'] = "Edit Data dokter";

        $where = array('id_dokter' => $id);
        $data['dokter'] = $this->m_dokter->edit_data($where)->row_array();

        $this->load->view('v_header', $data);
        $this->load->view('dokter/v_edit', $data);
        $this->load->view('v_footer');
    }

    function update()
    {
        $data['title'] = "Update Data dokter";

        $id = $this->input->post('id_dokter');
        $nama_dokter = $this->input->post('nama_dokter');

        $data = array(
            'nama_dokter' => $nama_dokter
        );

        $where = array('id_dokter' => $id);
        $this->m_dokter->update_data($data, $where);

        redirect('dokter');
    }

    function delete($id)
    {
        $where = array('id_dokter' => $id);
        $this->m_dokter->delete_data($where);

        redirect('dokter');
    }
}
    
    /* End of file dokter.php */