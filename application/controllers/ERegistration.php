<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ERegistration extends CI_Controller {
 
	public function index()
	{
		$this->load->view('Header');
		$this->load->view('Eregistration');
		$this->load->view('Footer');
	}
}
