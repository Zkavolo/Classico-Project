<?php
	class Users extends CI_Controller
{
	//Fungsi Register
	public function register()
	{

		$this->form_validation->set_rules('namalengkap','Nama Lengkap','required');
		$this->form_validation->set_rules('namapengguna','Nama Pengguna','required|callback_check_namapengguna_ada');
		$this->form_validation->set_rules('email','Email','required|callback_check_email_ada');
		$this->form_validation->set_rules('nomorhandphone','Nomor Handphone','required|callback_check_nilai_handphone');
		$this->form_validation->set_rules('katasandi','Kata Sandi','required|callback_check_nilai_katasandi');
		$this->form_validation->set_rules('konfirmasi_kata_sandi','Konfirmasi kata sandi','matches[katasandi]|callback_check_nilai_katasandi2');
		$this->form_validation->set_rules('check','Check','required');

		if($this->form_validation->run() == FALSE){
			$this->load->view('home/register');
		} else{
			// Encrypt password
			$enc_password = md5($this->input->post('katasandi'));

			$this->user_model->register($enc_password);
			redirect('main/login');
		}
	}

	//Fungsi Login

	public function login()
	{
		$data['data'] = "Nama Pengguna / Email  atau Kata Sandi tidak valid.";
		$this->form_validation->set_rules('user_main','Username or Email','required');
		$this->form_validation->set_rules('katasandi','Kata Sandi','required|callback_check_katasandi_ada');

		if($this->form_validation->run() == FALSE){
			$this->load->view('home/login', $data);
		} else{
			//Get usermain and password
			$user_main = $this->input->post('user_main');
			$kata_sandi = md5($this->input->post('katasandi'));

			$user_id = $this->user_model->login($user_main,$kata_sandi);

			$username = $this->user_model->Get_nama_pengguna($user_id);

			if($user_id){
				//Make Session
				$user_data = array(
				'user_id' => $user_id,
				'username' => $username,
				'logged_in' => true
			);

				$this->session->set_userdata($user_data);
				redirect('main/index');

		    } else {
		    	$data['data'] = "Nama Pengguna / Email  atau Kata Sandi tidak valid.";
		    	$this->load->view('home/login', $data);
		    }
		}
	}

	public function logout(){
		$this->session->unset_userdata('logged_in');
		$this->session->unset_userdata('user_id');
		$this->session->unset_userdata('username');

		redirect('main/login');
	}

	//Fungsi Mengecek Validasi Register
	function check_namapengguna_ada($namapengguna)
	{
		$this->form_validation->set_message('check_namapengguna_ada', 'Nama Pengguna sudah terdaftar');
		if($this->user_model->check_namapengguna_ada($namapengguna)){
			return true;
		} else {
			return false;
		}
	}

	function check_email_ada($email)
	{
		$this->form_validation->set_message('check_email_ada', 'Email sudah terdaftar');
		if($this->user_model->check_email_ada($email)){
			return true;
		} else {
			return false;
		}
	}

	function check_nilai_handphone($nomorhandphone)
	{
		$this->form_validation->set_message('check_nilai_handphone', 'Nomor handphone tidak valid. Pastikan tetdapat minimal 10 angka.');
		if($this->user_model->check_nilai_handphone($nomorhandphone)){
			return true;
		} else {
			return false;
		}
	}

	function check_nilai_katasandi($katasandi)
	{
		$this->form_validation->set_message('check_nilai_katasandi', 'Kata sandi minimal 8 karakter');
		if($this->user_model->check_nilai_katasandi($katasandi)){
			return true;
		} else {
			return false;
		}
	}

	function check_nilai_katasandi2($konfirmasi_kata_sandi)
	{
		$this->form_validation->set_message('check_nilai_katasandi2', 'Kata sandi minimal 8 karakter');
		if($this->user_model->check_nilai_katasandi2($konfirmasi_kata_sandi)){
			return true;
		} else {
			return false;
		}
	}

	function check_katasandi_ada($katasandi)
	{
		$this->form_validation->set_message('check_katasandi_ada', 'Nama Pengguna / Email  atau Kata Sandi tidak valid.');
		if($this->user_model->check_katasandi_ada($katasandi)){
			return true;
		} else {
			return false;
		}
	}
}