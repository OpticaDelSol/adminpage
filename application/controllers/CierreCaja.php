<?php

class CierreCaja extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Carga_manual_model');
    } 

    /*
     * Listing of cargas_manuales
     */
    function index()
    {
        $data['cierres'] = [
            ['sucursal'=>'barranqueras','fecha'=>'01/01/22'],
            ['sucursal'=>'corrientes','fecha'=>'01/01/22'],
            ['sucursal'=>'fontana','fecha'=>'01/01/22'],
            ['sucursal'=>'alberdi','fecha'=>'01/01/22'],
            ['sucursal'=>'colon','fecha'=>'01/01/22'],
        ];
        
        $data['_view'] = 'cierre_caja/index';
        $this->load->view('layouts/main',$data);
    }
    function cierre_z()
    {
        $data['_view'] = 'cierre_caja/listado/layout';
        $data['title'] = 'Cierre Z';
        $data['children'] = 'cierre_caja/listado/_lista_cierre_z';
        $data['new_url'] = site_url('cierreCaja/z_add');
        $this->load->view('layouts/main',$data);
    }
    function cierre_lote()
    {
//        $data['_view'] = 'cierre_caja/listado/layout';
//        $data['title'] = 'Cierre Lote';
//        $data['children'] = 'cierre_caja/listado/_lista_lote';
//        $data['new_url'] = site_url('cierreCaja/lote_add');
//        $this->load->view('layouts/main',$data);
    }
    function cierre_caja_add()
    {
        $data['sucursales'] = [];
        $data['_view'] = 'cierre_caja/nuevo/layout';
        $data['js_to_load'] = ['nuevo_cierre_caja.js'];
        $this->load->view('layouts/main',$data);
    }
    function detalle($id)
    {
        $data['sucursales'] = [];
        $data['_view'] = 'cierre_caja/detalle/detalle_cierre';
        $this->load->view('layouts/main',$data);
    }
    function z_add()
    {
        $data['_view'] = 'cierre_caja/nuevo/layout';
        $data['children'] = 'cierre_caja/nuevo/_nuevo_cierre_z';
        $this->load->view('layouts/main',$data);
    }
    
    function lote_add()
    {
        $data['_view'] = 'cierre_caja/nuevo/layout';
        $data['children'] = 'cierre_caja/nuevo/_nuevo_lote';
        $this->load->view('layouts/main',$data);
    }
    
    
}