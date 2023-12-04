<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_paket extends CI_Model {

	public function get_data() {
		
		return $this->db->get('paket');
	}

	public function count_rows() {
		return $this->db->count_all('paker');
	}

	public function getPostsByUser($user) {
        $this->db->where('user_id', $user);
        return $this->db->get('paket')->result();

	}
	
	public function get_records($paket_id){
		
		$where = array('paket_id' => $paket_id);
		$this->db->where($where);
		return $this->db->get('paket');
	}

	public function insert_data($data, $table){
		$this->db->insert($table, $data);
	}

	public function update_data($paket_id, $data, $table){
		$where = array('paket_id' => $paket_id);
		$this->db->where($where);
		return $this->db->update($table, $data);
	}

	public function delete_data($paket_id, $table){
		$where = array('paket_id' => $paket_id);
		$this->db->where($where);
		return $this->db->delete($table);
	}

}