<?php

class M_kunjungan extends CI_Model
{
    // View Data
    function view_data()
    {
        // return $this->db->get('berobat');
        $query = $this->db->query("SELECT berobat.*, 
        pasien.nama_pasien, 
        pasien.umur,
        pasien.jenis_kelamin,
        dokter.nama_dokter
        FROM berobat
        INNER JOIN pasien ON berobat.id_pasien = pasien.id_pasien
        INNER JOIN dokter ON berobat.id_dokter = dokter.id_dokter
        ");

        return $query;
    }

    // Insert Data
    function insert_data($data)
    {
        return $this->db->insert('berobat', $data);
    }

    // Edit Data
    function edit_data($where)
    {
        return $this->db->get_where('berobat', $where);
    }

    // Update Data
    function update_data($data, $where)
    {
        $this->db->where($where);
        $this->db->update('berobat', $data);
    }

    // Delete Data
    function delete_data($where)
    {
        $this->db->where($where);
        $this->db->delete('berobat');
    }

    // Function Rekap Medis
}
