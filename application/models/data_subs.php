<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_subs extends CI_Model {

    public function createSubs($user_id, $date_end)
    {
        // Proses pembuatan langganan
        $data = array(
            'user_id' => $user_id,
            'date_end' => $date_end,
        );

        $this->db->insert('subs_user', $data);
        return $this->db->insert_id();
    }

    public function updatedate_end($subs_id, $date_end)
    {
        // Perbarui waktu berlaku langganan
        $data = array(
            'date_end' => $date_end,
        );

        $this->db->where('subs_id', $subs_id);
        $this->db->update('subs_user', $data);
    }
}