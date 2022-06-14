<?php

class M_users extends CI_Model
{
    // View Data
    function view_data()
    {
        return $this->db->get('users');
    }

    // Insert Data
    function insert_data($data)
    {
        return $this->db->insert('users', $data);
    }

    // Edit Data
    function edit_data($where)
    {
        return $this->db->get_where('users', $where);
    }

    // Update Data
    function update_data($data, $where)
    {
        $this->db->where($where);
        $this->db->update('users', $data);
    }

    // Delete Data
    function delete_data($where)
    {
        $this->db->where($where);
        $this->db->delete('users');
    }
}
