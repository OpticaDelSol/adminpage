<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Documento_percepcion extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Documento_percepcion_model');
    } 

    /*
     * Listing of documento_percepciones
     */
    function index()
    {
        $data['documento_percepciones'] = $this->Documento_percepcion_model->get_all_documento_percepciones();
        
        $data['_view'] = 'documento_percepcion/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new documento_percepcion
     */
    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('monto','Monto','required');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'documento_id' => $this->input->post('documento_id'),
				'monto' => $this->input->post('monto'),
            );
            
            $documento_percepcion_id = $this->Documento_percepcion_model->add_documento_percepcion($params);
            redirect('documento_percepcion/index');
        }
        else
        {
			$this->load->model('Documento_model');
			$data['all_documentos'] = $this->Documento_model->get_all_documentos();
            
            $data['_view'] = 'documento_percepcion/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a documento_percepcion
     */
    function edit($id)
    {   
        // check if the documento_percepcion exists before trying to edit it
        $data['documento_percepcion'] = $this->Documento_percepcion_model->get_documento_percepcion($id);
        
        if(isset($data['documento_percepcion']['id']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('monto','Monto','required');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'documento_id' => $this->input->post('documento_id'),
					'monto' => $this->input->post('monto'),
                );

                $this->Documento_percepcion_model->update_documento_percepcion($id,$params);            
                redirect('documento_percepcion/index');
            }
            else
            {
				$this->load->model('Documento_model');
				$data['all_documentos'] = $this->Documento_model->get_all_documentos();

                $data['_view'] = 'documento_percepcion/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The documento_percepcion you are trying to edit does not exist.');
    } 

    /*
     * Deleting documento_percepcion
     */
    function remove($id)
    {
        $documento_percepcion = $this->Documento_percepcion_model->get_documento_percepcion($id);

        // check if the documento_percepcion exists before trying to delete it
        if(isset($documento_percepcion['id']))
        {
            $this->Documento_percepcion_model->delete_documento_percepcion($id);
            redirect('documento_percepcion/index');
        }
        else
            show_error('The documento_percepcion you are trying to delete does not exist.');
    }
    
}
