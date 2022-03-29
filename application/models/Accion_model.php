<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Accion_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get accion by id
     */
    function get_accion($id)
    {
        return $this->db->get_where('accion',array('id'=>$id))->row_array();
    }
        
    /*
     * Get all accion
     */
    function get_all_accion()
    {
        $this->db->order_by('id', 'desc');
        return $this->db->get('accion')->result_array();
    }
        
    /*
     * function to add new accion
     */
    function add_accion($params)
    {
        $this->db->insert('accion',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update accion
     */
    function update_accion($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('accion',$params);
    }
    
    /*
     * function to delete accion
     */
    function delete_accion($id)
    {
        return $this->db->delete('accion',array('id'=>$id));
    }
}
