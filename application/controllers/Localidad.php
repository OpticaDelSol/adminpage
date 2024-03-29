<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Localidad extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Localidad_model');
    } 

    /*
     * Listing of localidad
     */
    function index()
    {
        $data['localidad'] = $this->Localidad_model->get_all_localidad();
        
        $data['_view'] = 'localidad/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new localidad
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'nombre' => $this->input->post('nombre'),
				'departamento_id' => $this->input->post('departamento_id'),
            );
            
            $localidad_id = $this->Localidad_model->add_localidad($params);
            redirect('localidad/index');
        }
        else
        {            
            $data['_view'] = 'localidad/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a localidad
     */
    function edit($id)
    {   
        // check if the localidad exists before trying to edit it
        $data['localidad'] = $this->Localidad_model->get_localidad($id);
        
        if(isset($data['localidad']['id']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'nombre' => $this->input->post('nombre'),
					'departamento_id' => $this->input->post('departamento_id'),
                );

                $this->Localidad_model->update_localidad($id,$params);            
                redirect('localidad/index');
            }
            else
            {
                $data['_view'] = 'localidad/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The localidad you are trying to edit does not exist.');
    } 

    /*
     * Deleting localidad
     */
    function remove($id)
    {
        $localidad = $this->Localidad_model->get_localidad($id);

        // check if the localidad exists before trying to delete it
        if(isset($localidad['id']))
        {
            $this->Localidad_model->delete_localidad($id);
            redirect('localidad/index');
        }
        else
            show_error('The localidad you are trying to delete does not exist.');
    }
    
}
