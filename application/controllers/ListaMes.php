<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ListaMes extends CI_Controller {
	private $post;

	public function __construct() 
    {
        parent::__construct();
        $this->post = $this->input->post();
        $this->valida_logado();
        $this->load->model('ListarMes_model');
    }

	public function index()
	{
		$data['js'] = array(
            'modal_open',
            'buscaMes'
		);
         
        $data['nome']   = $_SESSION['login'];
        $data['tarifa'] = $_SESSION['tarifa'];
        $data['sessao'] =  $this->get_session();
        $this->load->model('Search_model');
        $data['mes'] = $this->Search_model->listar_cliente($_SESSION['id']);

        $this->load->helper('form');
        $this->load->view('head', $data);
        $this->load->view('menuCliente', $data);
        $this->load_modal();
        $this->load->view('listarMes_view', $data);
        $this->load->view('footer', $data);

    }

	public function load_modal()
    {
        $modal = $this->session->flashdata('modal');
        if(!empty($modal)){
            $data['resposta'] = $modal;
            $this->load->view('modal', $data);
        }
        
    }

    public function get_session(){
            
            $sessao = $this->session->all_userdata();
            if(isset($sessao['logado'])){
                return $sessao;
            }
            return array(
                
                'logado' => FALSE
                
                );
            
  	}

  	public function valida_logado(){
  		
  		$sessao = $this->session->all_userdata();
  		if( !isset($sessao['logado']) || $sessao['logado'] == FALSE ){
  			redirect('../login', 'redirect');
  		}
  	}
}
