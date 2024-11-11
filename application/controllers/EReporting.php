<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EReporting extends CI_Controller {
 
	public function index()
	{
		$this->load->view('Header');
		$this->load->view('Ereporting');
		$this->load->view('Footer');
	}
}
