<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gestion extends CI_Controller {

	function __construct(){
          parent::__construct();
          $this->load->model('mgestion');
      }//end construct
	
	public function index()
	{
    $datos = array('inicio' => '',
                   'gestion' => 'active',
                   'dar' => '',
                   'buscar' => '',
                   'mascotas' => '');
    $data = $this->input->post('buscar');
    if(empty($buscar)){
      $this->load->view('petlove/head_petlove',$datos);
		  $this->load->view('petlove/team_petlove',$data);
		  $this->load->view('petlove/footer_petlove');
    }else{
    $obtener_mascota["mascotas"] = $this->mgestion->buscar_mascota($data); 
    $this->load->view('petlove/head_petlove');
		$this->load->view('petlove/team_petlove',$obtener_mascota);
		$this->load->view('petlove/footer_petlove');
    }
  }

  public function buscar()
    {
      $dat = array('inicio' => '',
                   'gestion' => 'active',
                   'dar' => '');
      $data = $this->input->post('buscar');
      $datos = array('mascotas' => $this->mgestion->buscar_mascota($data),
                     'buscar' => 'lleno'); 
      if(empty($mascotas)){
        $this->load->view('petlove/head_petlove',$dat);
        $this->load->view('petlove/team_petlove',$datos);
        $this->load->view('petlove/footer_petlove');
      }else{
        $this->load->view('petlove/head_petlove',$dat);
        $this->load->view('petlove/team_petlove',vwuirbvwueirb);
        $this->load->view('petlove/footer_petlove');
      }
    }


    public function eliminar($id){
        $this->mgestion->eliminar_mascota($id);
        $this->session->set_flashdata("success","Has eliminado tu mascota");
        redirect(base_url()."index.php/Gestion");
      }

  
      public function actualizar($dato){
        $valor=$this->mgestion->mascota_seleccionada($dato);
        $dat = array('inicio' => '',
        'gestion' => 'active',
        'dar' => '');
        $this->load->view('petlove/head_petlove',$dat);
        $this->load->view('petlove/modmascotas',$valor);
        $this->load->view('petlove/footer_petlove');

      }
      public function update($id){
        $gen;
        $genero = $this->input->post("genero");
        if($genero == "Masculino"){
            $gen = 1;
          }else{
            $gen = 0;
          }

        $data = array(
          "nom_mascota" =>$this->input->post("nombre"),
          "tip_mascota" =>$this->input->post("tipo"),
          "ed_mascota" =>$this->input->post("edad"),
          "tmn_mascota" =>$this->input->post("tamanio"),
          "gnr_mascota" =>$genero,
          "des_mascota" => $this->input->post("descripcion"),
          "dep_mascota" =>$this->input->post("departamento"),
          "mun_mascota" =>$this->input->post("municipio"));

        $this->mgestion->update_mascota($data,$id);
        $this->session->set_flashdata("success","Has actualizado tu mascota");
        redirect(base_url()."index.php/Gestion");
       
        }
}

