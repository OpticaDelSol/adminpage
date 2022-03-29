
<?php
//not in use
$CI=& get_instance();

if(!$CI->session->userdata('user_name'))
{
    redirect('acceso/index');
}

$_user_name  = $CI->session->userdata('user_name'); 
$_details = $CI->session->userdata('details'); 
//if(isset($child_data))
//{
//    $data = $child_data;
//}

switch ($this->session->userdata('privileges'))
        {
            case 'root':
                $this->load->view('layouts/layout_root');
                break;
            case 'admin':
                $this->load->view('layouts/layout_admin');
                break;
            case 'gerente':
                $this->load->view('layouts/layout_gerente');
                break;
            case 'sucursal':
                $this->load->view('layouts/layout_sucursal');
                break;
            
            default :
                $this->load->view('layouts/main');
                break;
        }
        
