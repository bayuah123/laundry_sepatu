<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->session->userdata('user_id');

		$this->load->model('data_karyawan');
		$this->load->model('data_pelanggan');
		$this->load->model('data_transaksi');
		$this->load->model('data_pengeluaran');
	}

	public function index()
	{
		$useri = $this->session->userdata('user_id');
		$user['email'] = $this->session->userdata('email');
		$total_pendapatan = $this->data_transaksi->total_income_year();
		$total_pengeluaran = $this->data_pengeluaran->total_spend_year();
		$total_keuntungan = $total_pendapatan - $total_pengeluaran;
		
		$data = array(
					'n_karyawan' => count($this->data_karyawan->getKaryawanByUserId($useri)),
					'n_pelanggan' => count($this->data_pelanggan->getPelangganByUserId($useri)),
					'n_transaksi' => count($this->data_transaksi->getTransaksiByUserId($useri)),
					'total_pendapatan' => ($total_pendapatan > 0) ? number_format($total_pendapatan, 2) : '0.000' ,
					'total_pengeluaran' => ($total_pengeluaran > 0) ? number_format($total_pengeluaran, 2) : '0.000',
					'total_keuntungan' => is_numeric($total_keuntungan)? number_format($total_keuntungan, 2) : "0.000"
				);

		$this->load->view('header');
		$this->load->view('navigation', $user);
		$this->load->view('dashboard', $data);
		$this->load->view('footer');
		$this->load->view('source');
	}
}
