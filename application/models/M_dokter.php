<?php

class M_dokter extends CI_Model
{
    // View Data
    function view_data()
    {
        return $this->db->get('dokter');
    }

    // Insert Data
    function insert_data($data)
    {
        return $this->db->insert('dokter', $data);
    }

    // Edit Data
    function edit_data($where)
    {
        return $this->db->get_where('dokter', $where);
    }

    // Update Data
    function update_data($data, $where)
    {
        $this->db->where($where);
        $this->db->update('dokter', $data);
    }

    // Delete Data
    function delete_data($where)
    {
        $this->db->where($where);
        $this->db->delete('dokter');
    }
}
