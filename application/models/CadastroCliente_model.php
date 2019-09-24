<?php
class CadastroCliente_model extends CI_Model
{
    public function cadastro_cliente($post) {


        $data = array(
            'mes'                           => $post['mes'],
            'id_cliente'                    => $post['id_cliente'],
            'consumoPonta'                  => $post['consumoPonta'],
            'tcp'                           => $post['tcp'],
            'vpcp'                          => $post['vpcp'],
            'consumoForaPonta'              => $post['consumoForaPonta'],
            'tcfp'                          => $post['tcfp'],
            'vpcfp'                         => $post['vpcfp'],
            'consumototal'                  => $post['consumototal'],
            'demandaPonta'                  => $post['demandaPonta'],
            'tdp'                           => $post['tdp'],
            'vpdp'                          => $post['vpdp'],
            'demandaRegistrada'             => $post['demandaRegistrada'],
            'demandaForaPonta'              => $post['demandaForaPonta'],
            'tdfp'                          => $post['tdfp'],
            'vpdfp'                         => $post['vpdfp'],
            'ultrapassagemPonta'            => $post['ultrapassagemPonta'],
            'tup'                           => $post['tup'],
            'vpup'                          => $post['vpup'],
            'ultrapassagemForaPonta'        => $post['ultrapassagemForaPonta'],
            'tufp'                          => $post['tufp'],
            'vpufp'                         => $post['vpufp'],
            'erexPonta'                     => $post['erexPonta'],
            'tep'                           => $post['tep'],
            'vpep'                          => $post['vpep'],
            'erexForaPonta'                 => $post['erexForaPonta'],
            'tefp'                          => $post['tefp'],
            'vpefp'                         => $post['vpefp'],
            'derex'                         => $post['derex'],
            'tderex'                        => $post['tderex'],
            'vpderex'                       => $post['vpderex'],
            'iluminacaoip'                  => $post['iluminacaoip'],
            'bandeira'                      => $post['bandeira'],
            'desconto'                      => $post['desconto'],
            'valorapagar'                   => $post['valorapagar'],
        );

        if ($this->db->insert('cliente',$data))
        {
            return TRUE;
        }
        else
        {
            return FALSE;
        }
    }

    public function cadastro_login($post) {


        $data = array(
            'login'     => $post['login'],
            'senha'     => $post['senha'],
            'perfil'    => $post['perfil'],
            'tarifa'    => $post['tarifa'],
        );

        if ($this->db->insert('login',$data))
        {
            return TRUE;
        }
        else
        {
            return FALSE;
        }
    }

    public function checar_login($login)
    {
        $this->db->where('login', $login['login']);
        $query = $this->db->get('login'); 
        if($query->num_rows() == 1) 
        {
            return FALSE;
        }
        else return TRUE;   
    }


    public function listar_cliente($id_cliente){

        $this->db->select('id_cliente');
        $this->db->select('mes');
        $this->db->where('id_cliente', $id_cliente);

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