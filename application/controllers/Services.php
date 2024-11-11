<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Services extends CI_Controller {
 
	public function index()
	{
		$this->load->view('Header');
		$this->load->view('Services');
		$this->load->view('Footer');
	}
}
