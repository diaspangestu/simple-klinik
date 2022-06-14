<?php

class M_pasien extends CI_Model
{
    // View Data
    function view_data()
    {
        return $this->db->get('pasien');
    }

    // Insert Data
    function insert_data($data)
    {
        return $this->db->insert('pasien', $data);
    }

    // Edit Data
    function edit_data($where)
    {
        return $this->db->get_where('pasien', $where);
    }

    // Update Data
    function update_data($data, $where)
    {
        $this->db->where($where);
        $this->db->update('pasien', $data);
    }

    // Delete Data
    function delete_data($where)
    {
        $this->db->where($where);
        $this->db->delete('pasien');
    }
}
