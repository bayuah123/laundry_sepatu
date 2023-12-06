<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Paket extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('data_paket');
	}

	public function index()
	{
		$user['email'] = $this->session->userdata('email');
		$data['data_paket'] = $this->data_paket->get_data()->result();
		$useri = $this->session->userdata('user_id');
		$data['user_posts'] = $this->data_paket->getPostsByUser($useri);
		$this->load->view('header');
		$this->load->view('navigation', $user);
		$this->load->view('paket', $data);
		$this->load->view('footer');
		$this->load->view('source');
	}

	public function add()
	{
		$info['datatype'] = 'paket';
		$info['operation'] = 'Input';
		
		$paket_id = $this->input->post('paket_id');
		$nama_paket = $this->input->post('nama_paket');
		$harga = $this->input->post('harga');
		$user_id = $this->session->userdata('user_id');


		$this->load->view('header');

		$records = $this->data_paket->get_records($paket_id)->result();
		if (count($records) == 0) {
			$data = array(
				'paket_id' => $paket_id,
				'nama_paket' => $nama_paket,
				'harga' => $harga,
				'user_id' => $user_id,

			);
			$action = $this->data_paket->insert_data($data,'paket');
			$this->load->view('notifications/insert_success', $info);	
		} else {
			$this->load->view('notifications/insert_failed', $info);
		}
		$this->load->view('source');	
	}

	public function edit()
	{
		$info['datatype'] = 'paket';
		$info['operation'] = 'Ubah';
		
		$paket_id = $this->input->post('paket_id');
		$nama_paket = $this->input->post('nama_paket');
		$harga = $this->input->post('harga');
		$user_id = $this->session->userdata('user_id');
	
		$this->load->view('header');

		$data = array(
			'paket_id' => $paket_id,
			'nama_paket' => $nama_paket,
			'harga' => $harga,
			'user_id' => $user_id,

		);
		$action = $this->data_paket->update_data($paket_id, $data,'paket');

		if ($action) {
			$this->load->view('notifications/insert_success', $info);
		} else {
			$this->load->view('notifications/insert_failed', $info);
		}

		$this->load->view('source');	
	}

	public function delete()
	{
		$info['datatype'] = 'paket';

		$paket_id = $this->uri->segment('3');

		$this->load->view('header');

		$action = $this->data_paket->delete_data($paket_id, 'paket');
		if ($action) {
			$this->load->view('notifications/delete_success', $info);
		} else {
			$this->load->view('notifications/delete_failed', $info);
		}

		$this->load->view('source');
	}

	
}
