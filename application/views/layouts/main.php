<?php

$CI=& get_instance();

$_user_name  = $CI->session->userdata('user_name'); 
$_details = $CI->session->userdata('details'); 

switch ($this->session->userdata('privileges'))
        {
            case 'root':
                $data['_menu'] = 'layouts/layout_root_menu';
                break;
            case 'admin':
                $data['_menu'] = 'layouts/layout_admin_menu';
                break;
            case 'gerente':
               $data['_menu'] = 'layouts/layout_gerente_menu';
                break;
            case 'sucursal':
                $data['_menu'] = 'layouts/layout_sucursal_menu';
                break;
            
            default :
                $data['_menu'] = 'layouts/layout_root_menu';
                break;
        }
        $this->load->view('layouts/layout_common',$data);
