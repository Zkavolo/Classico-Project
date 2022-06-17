<?php
	class User_model extends CI_Model{
		public function register($enc_password){
			// User data array
			$data = array(
				'nama_lengkap' => $this->input->post('namalengkap'),
				'nama_pengguna' => $this->input->post('namapengguna'),
				'email' => $this->input->post('email'),
				'status' => $this->input->post('status'),
				'nomor_handphone' => $this->input->post('nomorhandphone'),
				'password' => $enc_password
			);

			//Insert user
			return $this->db->insert('user', $data);
		}

		public function login($user_main, $kata_sandi){
			// Validation
			$this->db->where('email', $user_main);
			$this->db->or_where('nama_pengguna', $user_main);
			$this->db->where('password', $kata_sandi);

			$result = $this->db->get('user');

			if($result->num_rows() == 1){
				return $result->row(0)->id_user;
			} else {
				return false;
			}
		}

		public function Get_nama_pengguna($user_id){
			// Validation
			$this->db->where('id_user', $user_id);
			$result = $this->db->get('user');

			if($result->num_rows() == 1){
				return $result->row(0)->nama_pengguna;
			} else {
				return false;
			}
		}

		public function check_namapengguna_ada($namapengguna){
			$query = $this->db->get_where('user', array('nama_pengguna' => $namapengguna));
			if(empty($query->row_array())){
				return true;
			} else {
				return false;
			}
		}

		public function check_email_ada($email){
			$query = $this->db->get_where('user', array('email' => $email));
			if(empty($query->row_array())){
				return true;
			} else {
				return false;
			}
		}

		public function check_nilai_handphone($nomorhandphone){
			if(strlen($nomorhandphone) >= 10){
				return true;
			} else {
				return false;
			}
		}

		public function check_nilai_katasandi($katasandi){
			if(strlen($katasandi) >= 8){
				return true;
			} else {
				return false;
			}
		}

		public function check_nilai_katasandi2($konfirmasi_kata_sandi){
			if(strlen($konfirmasi_kata_sandi) >= 8){
				return true;
			} else {
				return false;
			}
		}

		public function check_katasandi_ada($katasandi){
			$query = $this->db->get_where('user', array('password' => $katasandi));
			if(empty($query->row_array())){
				return true;
			} else {
				return false;
			}
		}
	}