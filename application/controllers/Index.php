<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller {

	function __construct(){
          parent::__construct();

      }//end construct
	
	public function index()
	{
		$this->load->view('petlove/head_petlove');
		$this->load->view('petlove/detelles_petlove');
		$this->load->view('petlove/footer_petlove');
	}
}
