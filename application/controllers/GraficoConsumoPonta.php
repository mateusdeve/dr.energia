<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GraficoConsumoPonta extends CI_Controller {
	private $post;

	public function __construct() 
    {
        parent::__construct();
        $this->post = $this->input->post();
        $this->valida_logado();
    }

	public function index()
	{
		$data['js'] = array(
            'modal_open',
            'graficoConsumoPonta',
		);
		
    $data['nome']   = $_SESSION['login'];
    $data['tarifa'] = $_SESSION['tarifa'];
	$data['sessao'] =  $this->get_session();

		
    $this->load->view('head', $data);
    $this->load->view('menuCliente', $data);
    $this->load_modal();
    $this->load->view('graficoConsumoPonta_view', $data);
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
