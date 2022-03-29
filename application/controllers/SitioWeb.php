<?php
class SitioWeb  extends CI_Controller{
    function index()
    {
        //$data['js_to_load'] = ['paginaweb_main.js'];
        //$data['_view'] = 'sitioweb/main_page';
        //$data['_view'] = 'sitioweb/en_construccion';
        //$this->load->view('sitioweb/layout',$data);
        $this->load->view('sitioweb/en_construccion');
    }
    
    function galeria()
    {
        $data['js_to_load'] = ['galleria.js'];
        $data['_view'] = 'sitioweb/galleria';
        $this->load->view('sitioweb/layout',$data);
    }
    
    function sucursales()
    {
        $data['_view'] = 'sitioweb/sucursales';
        $this->load->view('sitioweb/layout',$data);
    }
    
    function aboutus()
    {
        $data['_view'] = 'sitioweb/aboutus';
        $this->load->view('sitioweb/layout',$data);
    }
    
    }