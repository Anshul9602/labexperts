<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contactus extends CI_Controller {
 
	public function index()
	{
		$this->load->view('Header');
		$this->load->view('ContactUs');
		$this->load->view('Footer');
	}
}
