<?php 


class Crud extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_data');
		$this->load->helper('url');

	}

	function index(){
		$data['polisi'] = $this->m_data->tampil_data()->result();
		$data2['judul'] ='Data Polisi';		
		$this->load->view('templates/header',$data2);
		$this->load->view('admin/polisi',$data);
		$this->load->view('templates/footer');
		
	}

	function tambah(){
		$this->load->view('admin/daftarpolisi');
	}

	function tambah_aksi(){
		$namapolisi = $this->input->post('namapolisi');
		$ttl = $this->input->post('ttl');
		$nohp = $this->input->post('nohp');
		$emailpolisi = $this->input->post('emailpolisi');
		$alamat = $this->input->post('alamat');
		$password = $this->input->post('password');
 
		$data = array(
			
			'namapolisi' => $namapolisi,
			'ttl' => $ttl,
			'nohp' => $nohp,
			'emailpolisi' => $emailpolisi,
			'alamat' => $alamat,
			'password' => $password
			);
		$this->m_data->input_data($data,'polisi');
		redirect('crud/index');
	}

}