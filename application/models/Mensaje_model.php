<?php

class Mensaje_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    function get_mensajes_recibidos($id_usuario)
    {
        return $this->db->query(
                "select 
                m.id,
                m.mensaje,
                u.nombre as 'emisor',
                m.fecha
                from mensaje m, usuario_mensaje um, usuario u
                where um.mensaje_id = m.id
                and um.usuario_id = ".$id_usuario."
                and m.id_emisor = u.id
                and um.estado = 'PENDIENTE';"
                )->result_array();
    }
    
    function marcar_leido($id_mensaje)
    {
        return $this->db->query(
                "update usuario_mensaje set usuario_mensaje.estado = 'LEIDO' where usuario_mensaje.mensaje_id=".$id_mensaje.";"
                )->result_array();
    }
    
    function get_mensajes_enviados($id_usuario)
    {
        return $this->db->query(
                "select 
                m.id,
                m.mensaje,
                u.nombre as 'receptor',
                m.fecha
                from mensaje m, usuario u
                where 
                m.id_emisor = ".$id_usuario."
                and m.id_receptor = u.id
                 "
                )->result_array();
    }
}