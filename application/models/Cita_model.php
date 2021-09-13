<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cita_model extends CI_Model {

    public function getCitas()
    {
        $this->db->select("*");
        $this->db->from("tblcita");
        $results = $this->db->get();
        return $results->result();
    }

    public function getPaciente($id_paciente){
        $this->db->select("*");
        $this->db->from("tblpaciente");
        $this->db->where("identificacion",$id_paciente);
        $results = $this->db->get();
        return $results->row();
    }

    public function getMedico($id_medico){
        $this->db->select("*");
        $this->db->from("tblmedico");
        $this->db->where("identificacion",$id_medico);
        $results = $this->db->get();
        return $results->row();
    }
    

    public function save($data){
        $this->db->query("ALTER TABLE tblcita AUTO_INCREMENT 1");
        $this->db->insert("tblcita",$data);
    }

    public function getCita($id)
    {
        $this->db->select("u.id, u.codigo_cita, u.fecha, u.hora, u.identificacion_paciente, u.identificacion_medico,u.diagnostico,u.activo");
        $this->db->from("tblcita u");
        $this->db->where("u.id",$id);
        $results = $this->db->get();
        return $results->row();
    }

    public function update($data,$id) {
        $this->db->where("id",$id);
        $this->db->update("tblcita",$data);

    }

    public function delete($id) {
        $this->db->where("id",$id);
        $this->db->update("tblcita",["activo" => 0]);



    }

}
