<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('datasite');
	}
	public function index()
	{
		$datasite=$this->datasite->siteName()->result();
		$data['siteName']=$datasite[0]->value;
		$this->load->view('modul/css');
		$this->load->view('modul/js');
		$this->load->view('public/home',$data);
	}
}
