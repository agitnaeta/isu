<?php 	
	/**
	* 
	*/
	class Login extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('datasite');
		}
		public function index()
		{
			$this->load->view('modul/css');
			$sitedata=$this->datasite->siteName()->result();
			$data['siteName']=$sitedata[0]->value;
			$this->load->view('public/login',$data);
		}
	}