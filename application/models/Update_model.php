<?php 
class Update_model extends CI_Model {

    public function updade($post)
    {
         $data = array(

            'login'             => $post['login'],
            'senha'             => $post['senha'],
            'perfil'            => $post['perfil'],
        );
        $this->db->where('id', $post['id']);
    
        if($this->db->update('login_aluno', $data))
        {
            return TRUE;
        }
        else
        {
            return FALSE;
        }
    }

}