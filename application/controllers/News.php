<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {

 
	public function index()
	{
		$this->load->view('Header');
		$this->load->view('News');
		$this->load->view('Footer');
	}
}
