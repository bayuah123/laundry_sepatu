<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_user extends CI_Model {
	
	public function get_data() {
		return $this->db->get('user');
	}



    public function subscribeUser($user_id, $durationMonths) {
            // Simpan informasi berlangganan ke dalam tabel berlangganan
            $endDate = date('Y-m-d', strtotime("+$durationMonths months"));
            $data = array(
                'user_id' => $user_id,
                'start_date' => date('Y-m-d'),
                'end_date' => $endDate,
            );
            $this->db->insert('subscriptions', $data);
        }

        public function checkSubscriptionStatus($user_id) {
            // Periksa status berlangganan pengguna dari tabel berlangganan
            $this->db->where('user_id', $user_id);
            $this->db->where('end_date >=', date('Y-m-d'));
            $query = $this->db->get('subscriptions');
    
            return $query->num_rows() > 0 ? 'active' : 'inactive';
        }

}