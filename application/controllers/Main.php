<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Main extends CI_Controller
{

	public function index()
	{
		$this->load->view('home/landing_page.php');
	}

	public function login()
	{
		$data['data'] ="";
		$this->load->view('home/login', $data);
	}

	// public function login_notcommit()
	// {
	// 	$data['data'] ="";
	// 	$this->load->view('home/login_notcommit', $data);
	// }

	public function register()
	{
		$this->load->view('home/register');
	}
}
