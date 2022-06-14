<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Kunjungan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        if (empty($this->session->userdata('login'))) {
            redirect('auth');
        }

        $this->load->model('m_kunjungan');
        $this->load->model('m_pasien');
        $this->load->model('m_dokter');
    }

    // Function Read Data
    public function index()
    {
        $data['title'] = "Data Kunjungan / Berobat";

        $data['kunjungan'] = $this->m_kunjungan->view_data()->result_array();

        $this->load->view('v_header', $data);
        $this->load->view('kunjungan/v_data', $data);
        $this->load->view('v_footer');
    }

    // Function Insert Data
    function add()
    {
        $data['title'] = "Tambah Data Kunjungan / Berobat";

        $data['pasien'] = $this->m_pasien->view_data()->result_array();
        $data['dokter'] = $this->m_dokter->view_data()->result_array();

        $this->load->view('v_header', $data);
        $this->load->view('kunjungan/v_add', $data);
        $this->load->view('v_footer');
    }

    function add_action()
    {
        $tgl_berobat = $this->input->post('tgl_berobat');
        $pasien = $this->input->post('pasien');
        $dokter = $this->input->post('dokter');

        $data = array(
            'tgl_berobat' => $tgl_berobat,
            'id_pasien' => $pasien,
            'id_dokter' => $dokter
        );

        $this->m_kunjungan->insert_data($data);

        redirect('kunjungan');
    }

    // Function Edit Data
    function edit($id)
    {
        $data['title'] = "Edit Data Kunjungan / Berobat";

        $where = array('id_berobat' => $id);
        $data['berobat'] = $this->m_kunjungan->edit_data($where)->row_array();

        $data['pasien'] = $this->m_pasien->view_data()->result_array();
        $data['dokter'] = $this->m_dokter->view_data()->result_array();

        $this->load->view('v_header', $data);
        $this->load->view('kunjungan/v_edit', $data);
        $this->load->view('v_footer');
    }

    function update()
    {
        $data['title'] = "Update Data Kunjungan / Berobat";

        $id = $this->input->post('id_berobat');
        $tgl_berobat = $this->input->post('tgl_berobat');
        $pasien = $this->input->post('pasien');
        $dokter = $this->input->post('dokter');

        $data = array(
            'tgl_berobat' => $tgl_berobat,
            'id_pasien' => $pasien,
            'id_dokter' => $dokter
        );

        $where = array('id_berobat' => $id);
        $this->m_kunjungan->update_data($data, $where);

        redirect('kunjungan');
    }

    // Function Delete Data
    function delete($id)
    {
        $where = array('id_berobat' => $id);
        $this->m_kunjungan->delete_data($where);

        redirect('kunjungan');
    }
}
    
    /* End of file pasien.php */
