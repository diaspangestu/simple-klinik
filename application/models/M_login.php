<?php


defined('BASEPATH') or exit('No direct script access allowed');

class M_login extends CI_Model
{
    function check_login($data)
    {
        return $this->db->get_where('users', $data);
    }
}
    
    /* End of file loginModel.php */
