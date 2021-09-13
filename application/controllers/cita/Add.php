<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model("Cita_model");
	}

	public function index()
	{	
		$this->load->view('cita/add');
	}

	public function save(){	
		//Capturamos el valor de los input por medio del name
		$fecha = $this->input->post("fecha");
		$hora = $this->input->post("hora");
		$diagnostico = $this->input->post("diagnostico");
		$id_paciente = $this->input->post("id_paciente");
        $id_medico = $this->input->post("id_medico");
	
		$this->form_validation->set_rules('diagnostico', 'El diagnostico no debe ser tan corto', 'required|min_length[3]');
        $this->form_validation->set_rules('id_paciente', 'identificación del paciente muy corta', 'required|min_length[3]');
        $this->form_validation->set_rules('id_medico', 'identificación del mèdico muy corta', 'required|min_length[3]');




		if ($this->form_validation->run() == FALSE){
			$this->load->view('cita/add');
		}else{
			if(($this->Cita_model->getPaciente($id_paciente)) or ($this->Cita_model->getmedico($id_medico))){
            $codigo_cita = random_int(100, 999);
			$data = array(
                "codigo_cita"=>$codigo_cita,
				"fecha"=>$fecha,
				"hora"=>$hora,
				"diagnostico"=>$diagnostico,
                "identificacion_paciente"=>$id_paciente,
                "identificacion_medico	"=>$id_medico,
                "activo"=>1
			);
			$this->Cita_model->save($data);
			//generar la alerta en la vista
			$this->session->set_flashdata('success', 'Se guardo los datos correctamente');
			#creamos la redireccoino
			redirect(base_url()."citas");
		}else{
			$this->session->set_flashdata('success', 'la identificacion del médico o del paciente no existe');
			$this->load->view('cita/add');
		}
	}



		
	}

}
