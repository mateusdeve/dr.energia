<?php
class ListarMes_model extends CI_Model
{
    public function listar_mes($mes,$id){

        // $this->db->select('id_cliente');
        // $this->db->select('mes');
        // $this->db->select('consumoPonta');
        // $this->db->select('consumoForaPonta');
        // $this->db->select('demandaPonta');
        // $this->db->select('demandaForaPonta');
        // $this->db->select('ultrapassagemPonta');
        // $this->db->select('ultrapassagemForaPonta');
        // $this->db->select('erexPonta');
        // $this->db->select('erexForaPonta');
        // $this->db->select('derex');
        // $this->db->select('valorapagar');
        // $this->db->select('mes');
        $this->db->where('mes', $mes);
        $this->db->where('id_cliente', $id);

        $query = $this->db->get('cliente');

        if ($query->num_rows() > 0)
        {
            return $query->result();
        }
        else
        {
            return FALSE;
        }
    }
}