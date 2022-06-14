<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Obat extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        if (empty($this->session->userdata('login'))) {
            redirect('auth');
        }

        $this->load->model('m_obat');
    }

    public function index()
    {
        $data['title'] = "Manajemen Data Obat";

        $data['obat'] = $this->m_obat->view_data()->result_array();

        $this->load->view('v_header', $data);
        $this->load->view('obat/v_data', $data);
        $this->load->view('v_footer');
    }

    function add()
    {
        $data['title'] = "Tambah Data Obat";

        $this->load->view('v_header', $data);
        $this->load->view('obat/v_add');
        $this->load->view('v_footer');
    }

    function add_action()
    {
        $nama_obat = $this->input->post('nama_obat');

        $data = array(
            'nama_obat' => $nama_obat
        );

        $this->m_obat->insert_data($data);

        redirect('obat');
    }

    function edit($id)
    {
        $data['title'] = "Edit Data Obat";

        $where = array('id_obat' => $id);
        $data['obat'] = $this->m_obat->edit_data($where)->row_array();

        $this->load->view('v_header', $data);
        $this->load->view('obat/v_edit', $data);
        $this->load->view('v_footer');
    }

    function update()
    {
        $data['title'] = "Update Data Obat";

        $id = $this->input->post('id_obat');
        $nama_obat = $this->input->post('nama_obat');

        $data = array(
            'nama_obat' => $nama_obat
        );

        $where = array('id_obat' => $id);
        $this->m_obat->update_data($data, $where);

        redirect('obat');
    }

    function delete($id)
    {
        $where = array('id_obat' => $id);
        $this->m_obat->delete_data($where);

        redirect('obat');
    }
}
    
    /* End of file obat.php */
