<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Pago_proveedor_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    function lista_pagos_proveedor($idProveedor)
    {
        return $this->db->query("select 
                pp.id,
                pp.fecha_alta,
                pp.monto as 'monto_total',
                ppm.monto,
                mp.descripcion as 'modo'
                 from pago_proveedor pp, pago_proveedor_modo ppm, modo_pago mp,
                 (select pc.id from proveedor_cuenta pc where pc.proveedor_id = ".$idProveedor.") cuenta
                  where 
                pp.id = ppm.fkPago and ppm.fkModoPago = mp.id and cuenta.id = pp.proveedor_cuenta_id
                order by pp.id desc;")
                ->result_array();
    }
    
    function eliminar_modos_pago($idPago)
    {
        $this->db->query("delete  from pago_proveedor_modo where pago_proveedor_modo.fkPago = ".$idPago.";");
    }
    
    function obtener_modos_pago($idPago)
    {
        return $this->db->query(
                "select "
                . "ppm.id,ppm.fkModoPago,  REPLACE(format( ppm.monto,2),',','') as 'monto',ppm.fkPago "
                . "from pago_proveedor_modo ppm "
                . "where ppm.fkPago=".$idPago.";")->result_array();
    }
    
    /*
     * function to add new modo_pago
     */
    function add_modo_pago($params)
    {
        $this->db->insert('pago_proveedor_modo',$params);
        return $this->db->insert_id();
    }
    
    
    /*
     * Get pago_proveedor by id
     */
    function get_pago_proveedor($id)
    {
        return $this->db->get_where('pago_proveedor',array('id'=>$id))->row_array();
    }
    
    function get_pagos_proveedor_gral()
    {
        
        return $this->db->query(
           "select 
            pp.id, 
            pp.monto, 
            date_format(pp.fecha_alta,'%d/%m/%y') as 'fecha_alta', 
            pc.proveedor_id,
            pp.comentarios,
            if( r.id is null,'0','1') as 'has_recibo'
            from  proveedor_cuenta pc , pago_proveedor pp  left join recibo r on pp.id = r.fkPago
            where pp.proveedor_cuenta_id = pc.id
            order by pp.id desc;")->result_array();
    }
        
    /*
     * Get all pagos_proveedor
     */
    function get_all_pagos_proveedor()
    {
        $this->db->order_by('id', 'desc');
        return $this->db->get('pago_proveedor')->result_array();
    }
        
    /*
     * function to add new pago_proveedor
     */
    function add_pago_proveedor($params)
    {
        $this->db->insert('pago_proveedor',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update pago_proveedor
     */
    function update_pago_proveedor($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('pago_proveedor',$params);
    }
    
    /*
     * function to delete pago_proveedor
     */
    function delete_pago_proveedor($id)
    {
        return $this->db->delete('pago_proveedor',array('id'=>$id));
    }
}
