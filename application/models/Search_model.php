<?php
class Search_model extends CI_Model
{   
    public function listar_cliente($id_cliente) 
     {
        if($id_cliente)
            $this->db->where('id_cliente', $id_cliente);

        $query = $this->db->get('cliente');

        if($query->num_rows() > 0) 
        {
            return $query->result();
        }

        else
         {
            return NULL;
         }
    }
}