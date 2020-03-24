<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {

	public function index()
	{
		
		$dataa['judul'] = 'TILON';
		$this->load->view('templates/header', $dataa);
		$this->load->view('admin/home');
		$this->load->view('templates/footer');
	}
	public function pelanggaran()
	{
		$data1['judul'] = 'Daftar Pelanggaran';
		$this->load->view('templates/header',$data1);
		$this->load->view('admin/Pelanggaran');
		$this->load->view('templates/footer');
	}
	public function polisi()
	{
		$data2['judul'] ='Data Polisi';		
		$this->load->view('templates/header',$data2);
		$this->load->view('admin/polisi');
		$this->load->view('templates/footer');
	}

	public function daftarpolisi()
	{
		$data['judul'] = 'Pendaftaran Polisi';
		$this->load->view('templates/header',$data);

      $this->load->helper(array('form','url'));
       
      $this->load->library('form_validation');
      $this->load->library('session');
       
      $this->form_validation->set_rules('username','Username','required');
      $this->form_validation->set_rules('email','Email','required|valid_email'); 
      $this->form_validation->set_rules('password','Password','required|min_length[6]'); // min_length[5] password tidak boleh kurang dari lima
      $this->form_validation->set_rules('confirmpassword','Confirm Password','required|min_length[6]|matches[password]'); // matches[password] mencocokan password
       
        if ($this->form_validation->run()==FALSE){
            $this->load->view('admin/daftarpolisi',$data); // file form_view.php
        }
       
        else {      

          $this->session->set_flashdata('succses','Data Yang anda masukan berhasil.');
          redirect('form');
        }
    


		
		$this->load->view('templates/footer');
	}
	public function daftaradmin()
	{
		$data['judul'] = 'Pendaftaran Admin';
		$this->load->view('templates/header',$data);
		$this->load->view('admin/daftaradmin',$data);
		$this->load->view('templates/footer');
	}
}

?>
