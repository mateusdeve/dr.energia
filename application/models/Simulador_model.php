<?php 
class Simulador_model extends CI_Model {

    public function cadastro($post) {
        date_default_timezone_set('America/Sao_Paulo');

        $datatime   =   date("d/m/y");
        $hora       =   date("H:i:s");
        
        $data = array(
            'nome'      =>  $post['nome'],
            'email'     =>  $post['email'],
            'estado'    =>  $post['estado'],
            'cmm'       =>  $post['cmm'],
            'emm'       =>  $post['emm'],
            'emd'       =>  $post['emd'],
            'hsp'       =>  $post['hsp'],
            'pm'        =>  $post['pm'],
            'ppico'     =>  $post['ppico'],
            'tarifa'    =>  $post['tarifa'],
            'pinver'    =>  $post['pinver'],
            'area'      =>  $post['area'],
            'qm'        =>  $post['qm'],
            'em'        =>  $post['em'],
            'kwp'       =>  $post['kwp'],
            'data'      =>  $datatime,
            'hora'      =>  $hora

        );

        if($this->db->insert('dados_simulador', $data)) {
            return TRUE;
        }
        else {
            return FALSE;
        }
    }
}
