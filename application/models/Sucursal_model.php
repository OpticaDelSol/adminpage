<?php

class Sucursal_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    function get_sucursales()
    {
        return $this->db->query("select * from sucursal")->result_array();
    }
    
}
    