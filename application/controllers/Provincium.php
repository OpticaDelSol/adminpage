<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Provincium extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Provincium_model');
    } 

    /*
     * Listing of provincias
     */
    function index()
    {
        $data['provincias'] = $this->Provincium_model->get_all_provincias();
        
        $data['_view'] = 'provincium/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new provincium
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'nombre' => $this->input->post('nombre'),
            );
            
            $provincium_id = $this->Provincium_model->add_provincium($params);
            redirect('provincium/index');
        }
        else
        {            
            $data['_view'] = 'provincium/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a provincium
     */
    function edit($id)
    {   
        // check if the provincium exists before trying to edit it
        $data['provincium'] = $this->Provincium_model->get_provincium($id);
        
        if(isset($data['provincium']['id']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'nombre' => $this->input->post('nombre'),
                );

                $this->Provincium_model->update_provincium($id,$params);            
                redirect('provincium/index');
            }
            else
            {
                $data['_view'] = 'provincium/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The provincium you are trying to edit does not exist.');
    } 

    /*
     * Deleting provincium
     */
    function remove($id)
    {
        $provincium = $this->Provincium_model->get_provincium($id);

        // check if the provincium exists before trying to delete it
        if(isset($provincium['id']))
        {
            $this->Provincium_model->delete_provincium($id);
            redirect('provincium/index');
        }
        else
            show_error('The provincium you are trying to delete does not exist.');
    }
    
}
