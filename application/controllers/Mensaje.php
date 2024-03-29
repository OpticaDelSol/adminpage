<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Mensaje extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Mensaje_model');
        $this->load->model('Usuario_model');
    } 
    
    function nuevo_mensaje()
    {
        $data['usuarios'] = $this->Usuario_model->get_all_usuarios();
        $this->load->library('form_validation');
        $this->form_validation->set_rules('codigo','Codigo','required');
        
        if($this->form_validation->run())     
        {   
            $params = array();
            
            $documento_id = $this->Documento_model->add_documento($params);
            redirect('documento/index_facturas/'.$id_proveedor);
        }
        else
        {
            $data['_view'] = 'mensaje/nuevo';
            $this->load->view('layouts/layout',$data);
        }
    }
    
    function mensajes_recibidos()
    {
        $data['mensajes'] = $this->Mensaje_model->get_mensajes_recibidos(0);
        $data['_view'] = 'mensaje/recibidos';
        
        $this->load->view('layouts/main',$data);
    }
    
    function get_mensajes_enviados()
    {
        $data['mensajes'] = $this->Mensaje_model->get_mensajes_recibidos(0);
        $data['_view'] = '';
        
        $this->load->view('layouts/main',$data);
    }
    
    function marcar_leido($id_mensaje)
    {
        $this->Mensaje_model->marcar_leido($id_mensaje);
        redirect('mensaje/mensajes_recibidos');
    }
    
}