<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CadastroCliente extends CI_Controller {
	private $post;

	public function __construct() 
    {
        parent::__construct();
        $this->post = $this->input->post();
        $this->valida_logado();
        $this->load->model('cadastroCliente_model');
    }

	public function index()
	{
        if(empty($_GET['id'])){
            redirect('../ListarCliente');
        }

		$data['js'] = array(
            'modal_open',
            'cadastroCliente'
		);
		
        $data['nome']           = $_SESSION['login'];
        $data['sessao']         =  $this->get_session();
        $data['id_cliente']     =  $_GET['id'];

        $data['list']           = $this->cadastroCliente_model->listar_cliente($_GET['id']);

        // print_r($data['list']);exit;

        $this->load->helper('form');
        $this->load->view('head', $data);
        $this->load->view('menuAdmin', $data);

        $this->load_modal();
        $this->load->view('cadastroCliente_view', $data);
        $this->load->view('footer',$data);

        $data['resposta'] = $this->valida_cadastro();

        if ($data['resposta'] != NULL) 
        {
            if($data['resposta'] === TRUE)
            {
                $this->load->model('cadastroCliente_model');
                $this->cadastroCliente_model->cadastro_cliente($this->post);

                $modal = array(
                        'success' => TRUE,
                        'message' => 'Seu Cadastro Foi Realizado Com Sucesso',
                        'title' => 'Parabéns',
                        'class' => 'success'
                        );

                $url = '../cadastroCliente?id='.$_GET['id'];

                $this->session->set_flashdata('modal', $modal);
                redirect($url, 'redirect');
            }
            
        }

    }
    
    private function valida_cadastro() 
    {
       if (!empty($this->post))
       {
           
           $this->load->library('form_validation');
           //regras de validação//
           $this->form_validation->set_rules('mes', '', 'required');
           $this->form_validation->set_rules('id_cliente', '', 'required');
            // consumo ponta
           $this->form_validation->set_rules('consumoPonta', 'Consumo Ponta', 'required');
           $this->form_validation->set_rules('tcp', 'Tarifa CP', 'required');
           $this->form_validation->set_rules('vpcp', 'Valor Parcial CP', 'required');
            // consumo fora ponta
           $this->form_validation->set_rules('consumoForaPonta', 'Consumo Fora Ponta', 'required');
           $this->form_validation->set_rules('tcfp', 'Tarifa CFP', 'required');
           $this->form_validation->set_rules('vpcfp', 'Valor Parcial CFP', 'required');
           //Consumo Total
           $this->form_validation->set_rules('consumototal', '', 'required');
            // demanda ponta    
           $this->form_validation->set_rules('demandaPonta', 'Demanda Ponta(AZUL)', 'required');
           $this->form_validation->set_rules('tdp', 'Tarifa DP', 'required');
           $this->form_validation->set_rules('vpdp', 'Valor Parcial DP', 'required');

            // demanda registrada 
            $this->form_validation->set_rules('demandaRegistrada', 'Demanda Registrada', 'required');
            //demanda fora ponta
           $this->form_validation->set_rules('demandaForaPonta', 'Demanda Fora Ponta(AZUL,VERDE)', 'required');
           $this->form_validation->set_rules('tdfp', 'Tarifa dfp', 'required');
           $this->form_validation->set_rules('vpdfp', 'Valor Parcial dfp', 'required');
            // Ultrapassagem Ponta
           $this->form_validation->set_rules('ultrapassagemPonta', 'Ultrapassagem Ponta(AZUL)', 'required');
           $this->form_validation->set_rules('tup', 'Tarifa up', 'required');
           $this->form_validation->set_rules('vpup', 'Valor Parcial up', 'required');
           // Ultrapassagem Fora Ponta
           $this->form_validation->set_rules('ultrapassagemForaPonta', 'Ultrapassagem Fora Ponta(AZUL,VERDE)', 'required');
           $this->form_validation->set_rules('tufp', 'Tarifa ufp', 'required');
           $this->form_validation->set_rules('vpufp', 'Valor Parcial ufp', 'required');
            // EREX Ponta
           $this->form_validation->set_rules('erexPonta', 'EREX Ponta', 'required');
           $this->form_validation->set_rules('tep', 'Tarifa ep', 'required');
           $this->form_validation->set_rules('vpep', 'Valor Parcial ep', 'required');
            // EREX Fora Ponta
           $this->form_validation->set_rules('erexForaPonta', 'EREX Fora Ponta', 'required');
           $this->form_validation->set_rules('tefp', 'Tarifa efp', 'required');
           $this->form_validation->set_rules('vpefp', 'Valor Parcial efp', 'required');
           // EREX Fora Ponta
           $this->form_validation->set_rules('derex', 'DEREX', 'required');
           $this->form_validation->set_rules('tderex', 'Tarifa derex', 'required');
           $this->form_validation->set_rules('vpderex', 'Valor Parcial derex', 'required');
           // Iluminação publica
           $this->form_validation->set_rules('iluminacaoip', 'Iluminação Publica', 'required');
           //bandeira da conta de luz
           $this->form_validation->set_rules('bandeira', 'Bandeira');
            //bandeira da conta de luz
           $this->form_validation->set_rules('desconto', 'Desconto');
            // valor a pagar
           $this->form_validation->set_rules('valorapagar', 'Valor a Pagar', 'required');

           //configurando erro ou sucesso//
           if ($this->form_validation->run() === FALSE) 
           {
               return array(
                   'class' => 'danger',
                   'message' => validation_errors() ,
                   'title' => 'Erro Ao Enviar'
               );
           }
           else
           {
               
               return true;
           }
       }
       return NULL;
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

        if($sessao['perfil'] != 'admin') {
            redirect('../login', 'redirect');
        }
  	}
}
