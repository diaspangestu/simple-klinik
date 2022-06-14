<?php

class M_obat extends CI_Model
{
    // View Data
    function view_data()
    {
        return $this->db->get('obat');
    }

    // Insert Data
    function insert_data($data)
    {
        return $this->db->insert('obat', $data);
    }

    // Edit Data
    function edit_data($where)
    {
        return $this->db->get_where('obat', $where);
    }

    // Update Data
    function update_data($data, $where)
    {
        $this->db->where($where);
        $this->db->update('obat', $data);
    }

    // Delete Data
    function delete_data($where)
    {
        $this->db->where($where);
        $this->db->delete('obat');
    }
}
