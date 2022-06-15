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
		$this->load->view('home/login');
	}

	public function register()
	{
		$this->load->view('home/register');
	}
}
