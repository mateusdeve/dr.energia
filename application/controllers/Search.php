<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller {

	private $post;
    public function __construct() 
    {
        parent::__construct();
        $this->post = $this->input->post();
        $this->load->model('ListarMes_model');
    }

	public function index()
	{
        $data['js'] = array(
            'modal_caller',
        );

        $resultado = null;
        $busca = $this->post['busca'];
        $id_session = $_SESSION['id'];

        if (isset($busca) && !empty($busca)) {
            $resultados = $this->ListarMes_model->listar_mes($busca,$id_session);

        }

        //return json_encode($resultado);
        print_r(json_encode($resultados));
    }
}

/*$search = new Search();
$search->index();*/