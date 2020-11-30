<?php 

/**
 * 
 */
class Mgestion extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->database();
    }

    function obtener_mascotas(){
        $this->db->select("*");
           $this->db->from("tb_mascota");
           $resultados =$this->db->get();
           return $resultados->result();
    }

    function buscar_mascota($data){
        $this->db->select('*');
        $this->db->from('tb_mascota');
        $this->db->where('con_mascota', $data);
        $resultados = $this->db->get();
        return $resultados->result();
     }

    function eliminar_mascota($id){
      $this->db->where("id_mascota",$id);
      $this->db->delete("tb_mascota");
     }

     function mascota_seleccionada($id){
      $this->db->select("m.id_mascota, m.nom_mascota, m.tip_mascota, m.ed_mascota, m.tmn_mascota, m.gnr_mascota, m.des_mascota, m.dep_mascota, m.mun_mascota, m.fec_mascota");
      $this->db->from("tb_mascota m");
      $this->db->where("m.id_mascota",$id);
      $resultados =$this->db->get();
      return $resultados->row();
   }


   function update_mascota($data,$id){
    $this->db->where("id_mascota",$id);
    $this->db->update("tb_mascota",$data);
    if ($this->db->affected_rows() > 0) {
        return true;
    } else {
        return false;
    }
   }

	
}

?>
