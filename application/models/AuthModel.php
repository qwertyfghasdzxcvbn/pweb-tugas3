<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AuthModel extends CI_Model
{

    public function insert($data)
    {
        return $this->db->insert('session', $data);
    }

    public function login($username, $password)
    {

        $encrypted_password = hash('sha256', $password);
        // why tf does this not work
        $this->db->where('username', $username);
        $this->db->where('password', $encrypted_password);
        $query = $this->db->get('session')->row_array();
        if($query){
            return true;
            
        }else{
            return false;
        }
    }

}