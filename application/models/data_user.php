<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_user extends CI_Model {
	
	public function get_data() {
		return $this->db->get('user');
	}

    
    public function register($namauser, $email, $password, $role_id, $is_active, $date_end){
            // Proses pendaftaran
            $data = array(
                'namauser' => $namauser,
                'email' => $email,
                'password' => $password,
                'role_id' => $role_id,
                'is_active' => $is_active,
                'date_created' => date('Y-m-d'),
                'date_end' => $date_end,
            );
    
            $this->db->insert('user', $data);
            return $this->db->insert();
    }
    
    public function activateAccount($user_id)
    {
        // Aktivasi akun
        $data = array(
            'is_active' => 1,
        );

        $this->db->where('id_user', $user_id);
        $this->db->update('user', $data);
    }
}

