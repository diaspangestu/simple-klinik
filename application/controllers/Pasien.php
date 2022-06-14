<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Pasien extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        if (empty($this->session->userdata('login'))) {
            redirect('auth');
        }

        $this->load->model('m_pasien');
    }

    // Function Read Data
    public function index()
    {
        $data['title'] = "Manajemen Data Pasien";

        $data['pasien'] = $this->m_pasien->view_data()->result_array();

        $this->load->view('v_header', $data);
        $this->load->view('pasien/v_data', $data);
        $this->load->view('v_footer');
    }

    // Function Insert Data
    function add()
    {
        $data['title'] = "Tambah Data Pasien";

        $this->load->view('v_header', $data);
        $this->load->view('pasien/v_add');
        $this->load->view('v_footer');
    }

    function add_action()
    {
        $nama_pasien = $this->input->post('nama_pasien');
        $jenis_kelamin = $this->input->post('jenis_kelamin');
        $umur = $this->input->post('umur');

        $data = array(
            'nama_pasien' => $nama_pasien,
            'jenis_kelamin' => $jenis_kelamin,
            'umur' => $umur
        );

        $this->m_pasien->insert_data($data);

        redirect('pasien');
    }

    // Function Edit Data
    function edit($id)
    {
        $data['title'] = "Edit Data pasien";

        $where = array('id_pasien' => $id);
        $data['pasien'] = $this->m_pasien->edit_data($where)->row_array();

        $this->load->view('v_header', $data);
        $this->load->view('pasien/v_edit', $data);
        $this->load->view('v_footer');
    }

    function update()
    {
        $data['title'] = "Update Data pasien";

        $id = $this->input->post('id_pasien');
        $nama_pasien = $this->input->post('nama_pasien');
        $jenis_kelamin = $this->input->post('jenis_kelamin');
        $umur = $this->input->post('umur');

        $data = array(
            'nama_pasien' => $nama_pasien,
            'jenis_kelamin' => $jenis_kelamin,
            'umur' => $umur
        );

        $where = array('id_pasien' => $id);
        $this->m_pasien->update_data($data, $where);

        redirect('pasien');
    }

    // Function Delete Data
    function delete($id)
    {
        $where = array('id_pasien' => $id);
        $this->m_pasien->delete_data($where);

        redirect('pasien');
    }
}
    
    /* End of file pasien.php */
