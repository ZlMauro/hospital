<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
     #este metodo se carga antes que todos 
	public function __construct(){
		parent::__construct();
		$this->load->model("Cita_model");#llamamos le modelo por el nombre de la clase
	}

	public function index(){
		$data = array("data"=>$this->Cita_model->getCitas());	
	    $this->load->view('cita/main',$data);
	}

	public function delete($id){
		$this->Cita_model->delete($id);
		$this->session->set_flashdata('success', 'Se Anulo la cita Correctamente');
		redirect(base_url()."citas");
	}
}
