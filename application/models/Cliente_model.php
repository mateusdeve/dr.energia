<?php
class Cliente_model extends CI_Model
{   
    public function listarCliente() 
    {   
        $query = $this->db->get('login');

        if ($query->num_rows() > 0)
        {
            return $query->result();
        }
        else
        {
            return NULL;
        }
    }

    public function deletar_usuario($id) 
    {
        $this->db->where('id', $id);

        if($this->db->delete('login'))
            return TRUE;
        else
          return FALSE;
    }

    public function alterar_usuario($post)
    {     
        $data = array(

            'login'     => $post['login'],
            'senha'     => $post['senha'],
            'perfil'    => $post['perfil'],
            'tarifa'    => $post['tarifa'],
        );
        $this->db->where('id', $post['id']);
    
        if($this->db->update('login', $data))
        {
            return TRUE;
        }
        else
        {
            return FALSE;
        }
    }
}