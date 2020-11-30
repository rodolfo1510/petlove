<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct(){
          parent::__construct();
      }//end construct
	
	public function index()
	{
        $datos = array('inicio' => 'active',
                       'gestion' => '',
                       'dar' => '');
		$this->load->view('petlove/head_petlove',$datos);
		$this->load->view('petlove/portafolio_petlove');
		$this->load->view('petlove/footer_petlove');
  }

  public function buscar()
	{
		$this->load->view('petlove/head_petlove');
		$this->load->view('petlove/team_petlove');
		$this->load->view('petlove/footer_petlove');
  }

}