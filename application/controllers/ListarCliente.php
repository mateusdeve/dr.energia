<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ListarCliente extends CI_Controller {
	private $post;

	public function __construct() 
    {
        parent::__construct();
        $this->post = $this->input->post();
        $this->valida_logado();
        $this->load->model('cliente_model');
    }

	public function index()
	{
		$data['js'] = array(
            'modal_open',
            'scriptCliente',
		);
		
    $data['nome']       = $_SESSION['login'];
    $data['sessao']     =  $this->get_session();
    $data['user_data']  = $this->cliente_model->listarCliente();

    $this->load->helper('form');
    $this->load->view('head', $data);
    $this->load->view('modalExcluirLogin',$data);
    $this->load->view('modalAlterarLogin',$data);
    $this->load->view('menuAdmin', $data);

    $this->load_modal();
    $this->load->view('listarCliente_view', $data);
    $this->load->view('footer',$data);

    $data['resposta'] = $this->valida_cadastro();

        if ($data['resposta'] != NULL) 
        {
            if($data['resposta'] === TRUE)
            {
                $this->load->model('cadastroCliente_model');
                $checar = $this->cadastroCliente_model->checar_login($this->post);
                if($checar === FALSE){

                    $modal = array(
                        'succes' => FALSE,
                        'message' => 'Este Login Já Está Sendo Usado',
                        'title' => 'Tente Com Outro Login',
                        'class' => 'danger'
                        );
    
                $this->session->set_flashdata('modal', $modal);
                redirect('../listarCliente', 'redirect');
                }
                else{

                $this->load->model('cadastroCliente_model');
                $this->cadastroCliente_model->cadastro_login($this->post);

                $modal = array(
                        'success' => TRUE,
                        'message' => 'Seu Cadastro Foi Realizado Com Sucesso',
                        'title' => 'Parabéns',
                        'class' => 'success'
                        );

                $this->session->set_flashdata('modal', $modal);
                redirect('../listarCliente', 'redirect');
                }
            }
            
        }

    }
    
    private function valida_cadastro() 
    {
       if (!empty($this->post))
       {
            // $data['id_cliente'] = $this->post['id'];
           
           $this->load->library('form_validation');
           //regras de validação//
           $this->form_validation->set_rules('login', 'Login', 'required');
           $this->form_validation->set_rules('senha', 'Senha', 'required');
           $this->form_validation->set_rules('perfil', 'Perfil', 'required');
           $this->form_validation->set_rules('tarifa', 'Tarifa', 'required');
           
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
               
               return TRUE;
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
      }
      
    public function excluir_usuario() 
    {	
    	$this->load_modal();

        if(isset($this->post['id_usuario']) && !empty($this->post['id_usuario']))
        {
            $deleted = $this->cliente_model->deletar_usuario($this->post['id_usuario']);
            if($deleted)
            {
                $modal = array(
                            'success'	=> TRUE,
                            'message'	=> 'Usuário removido com Sucesso',
                            'title'		=> 'Removido',
                            'class'		=> 'success'
                            );
            }
            else
            {
                $modal = array( 
                        'success'	=> FALSE,
                        'message'	=> 'Erro ao excluir o usuário, tente novamente!' ,
                        'title'		=> 'Erro',
                        'class'		=> 'danger'
                        );
            }
            $this->session->set_flashdata('modal', $modal);
            redirect('../listarCliente', 'redirect');
        }    
        
    }

    public function alterar_usuario()
    {
        $data['modal_alterar_cliente'] = 'modal_open';
        $data['resposta'] = $this->valida_cadastro();
        $alterar= $this->cliente_model->alterar_usuario($this->post);
        if($alterar)
        {
            $modal = array(
                        'success' => TRUE,
                        'message' => 'Alterado com sucesso',
                        'title' => 'Alterado',
                        'class' => 'success'
                        );
        }
        else
        {
            $modal = array( 
                    'success' => FALSE,
                    'message' => 'Erro ao Alterar o usuário, tente novamente!' ,
                    'title' => 'Erro',
                    'class' => 'danger'
                    );
        }
         $this->session->set_flashdata('modal', $modal);
            redirect('../listarCliente', 'redirect');
    }
}
