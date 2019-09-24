<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SearchList extends CI_Controller {

	private $post; 
    public function __construct() 
    {
        parent::__construct();
        $this->post = $this->input->post();
        $this->load->model('cliente_model');
    }

	public function index()
	{
        $cliente = NULL;
        $sessao = $this->session->all_userdata();

        $cliente = $this->cliente_model->listarCliente();

        print_r(json_encode($cliente));



	}
}
