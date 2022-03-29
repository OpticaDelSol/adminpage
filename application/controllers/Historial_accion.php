<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Historial_accion extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Historial_accion_model');
    } 
    
    function registrar_evento($tipo,$detalle,$relID){
        $this->load->library('session');
        $params = array(
				'usuario_id' => $this->session->userdata('id_usuario'),
				'tipo_accion' => $tipo,
				'detalle' => $this->input->post('detalle'),
                                'rel_id' => $relID
            );
        $this->Historial_accion_model->add_historial_accion($params);
    }
    
    /*
     * Listing of historial_accion
     */
    function index()
    {
        $data['historial_accion'] = $this->Historial_accion_model->get_all_historial_accion();
        
        $data['_view'] = 'historial_accion/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new historial_accion
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'accion_id' => $this->input->post('accion_id'),
				'usuario_id' => $this->input->post('usuario_id'),
				'tipo_accion' => $this->input->post('tipo_accion'),
				'detalle' => $this->input->post('detalle'),
				'fecha' => $this->input->post('fecha'),
            );
            
            $historial_accion_id = $this->Historial_accion_model->add_historial_accion($params);
            redirect('historial_accion/index');
        }
        else
        {
			$this->load->model('Accion_model');
			$data['all_accion'] = $this->Accion_model->get_all_accion();

			$this->load->model('Usuario_model');
			$data['all_usuarios'] = $this->Usuario_model->get_all_usuarios();
            
            $data['_view'] = 'historial_accion/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a historial_accion
     */
    function edit($id)
    {   
        // check if the historial_accion exists before trying to edit it
        $data['historial_accion'] = $this->Historial_accion_model->get_historial_accion($id);
        
        if(isset($data['historial_accion']['id']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'accion_id' => $this->input->post('accion_id'),
					'usuario_id' => $this->input->post('usuario_id'),
					'tipo_accion' => $this->input->post('tipo_accion'),
					'detalle' => $this->input->post('detalle'),
					'fecha' => $this->input->post('fecha'),
                );

                $this->Historial_accion_model->update_historial_accion($id,$params);            
                redirect('historial_accion/index');
            }
            else
            {
				$this->load->model('Accion_model');
				$data['all_accion'] = $this->Accion_model->get_all_accion();

				$this->load->model('Usuario_model');
				$data['all_usuarios'] = $this->Usuario_model->get_all_usuarios();

                $data['_view'] = 'historial_accion/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The historial_accion you are trying to edit does not exist.');
    } 

    /*
     * Deleting historial_accion
     */
    function remove($id)
    {
        $historial_accion = $this->Historial_accion_model->get_historial_accion($id);

        // check if the historial_accion exists before trying to delete it
        if(isset($historial_accion['id']))
        {
            $this->Historial_accion_model->delete_historial_accion($id);
            redirect('historial_accion/index');
        }
        else
            show_error('The historial_accion you are trying to delete does not exist.');
    }
    
}
