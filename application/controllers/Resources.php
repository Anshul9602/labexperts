<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Resources extends CI_Controller {
 
	public function index()
	{
		$this->load->view('Header');
		$this->load->view('Resources');
		$this->load->view('Footer');
	}
}
