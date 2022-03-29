<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Acceso
 *
 * @author bruno
 */
class Acceso  extends CI_Controller{
    function index()
    { 
        $this->load->library('session');
        $this->load->model('Usuario_model');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('_password','_password','max_length[64]|required');
	$this->form_validation->set_rules('_usuario','_usuario','max_length[64]|required');
        
        if($this->form_validation->run())     
        {
            $usuario = $this->Usuario_model->validate_usuario($this->input->post('_usuario'),$this->input->post('_password'));
            if(isset($usuario['id']))
            {
                $newdata = array( 
                    'id_usuario' => $usuario['id'],
                    'user_name'  => $this->input->post('_usuario'),
                    'logged_in' => TRUE,
                    'privileges' => $usuario['permisos'],
                    'details' => $usuario['nombre']
                 );  

                 $this->session->set_userdata($newdata);
                
                redirect('dashboard/');
            }else
            {
                $data['_message'] = 'Error de validacion';
                $data['_view'] = 'acceso/index';
                $this->load->view('layouts/login',$data);
            }
        }
        else
        {
            $data['_message'] = '';
            $data['_view'] = 'acceso/index';
            $this->load->view('layouts/login',$data);
            
        }
                
    }
    
    function  logout()
    {
        $this->session->unset_userdata('user_name');
        redirect('acceso/index');
    }
    
 
}
