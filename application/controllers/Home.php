<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('login_page');
	}
	public function login()
	{
		$this->load->view('login_page');
	}
	public function register()
	{
		$this->load->view('registration_form');
	}
	public function profile()
	{
		$this->load->view('Admin/Profile');
	}
	public function update_profile()
	{
		$this->load->view('Admin/UpdateProfile');
	}
}
