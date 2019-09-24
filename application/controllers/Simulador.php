<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Simulador extends CI_Controller {
    public function __construct(){

        parent::__construct();

        $this->post = $this->input->post();

    }

    public function index(){

		$data['js'] = array (
			'modal_open',
            'main',
            'jQuery-Mask-Plugin-master/src/jquery.mask',
            'calculoSimulador',
            'creative.min',
        );

		$data['sessao'] =  $this->get_session();
		$this->load->helper('form');
        $this->load->view('head.php',$data);
        $this->load->view('menu.php',$data);
		$this->load_modal();
		$this->load->view('simulador_view',$data);
        $this->load->view('footer.php',$data);
        
        $data['resposta'] = $this->cadastro();
        if($data['resposta'] != NULL){
            if($data['resposta'] == TRUE){
                $this->load->model('Simulador_model');
                $this->Simulador_model->cadastro($this->post);
            }

        }
    }

    public function cadastro() {
        if (!empty($this->post)) {
            $this->load->library('form_validation');
            $this->form_validation->set_rules('nome', 'Nome', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required');
            $this->form_validation->set_rules('estado', 'Estado', 'required');
            $this->form_validation->set_rules('cmm', 'Consumo medio mês', 'required');
            $this->form_validation->set_rules('emm', '', 'required');
            $this->form_validation->set_rules('emd', '', 'required');
            $this->form_validation->set_rules('hsp', '', 'required');
            $this->form_validation->set_rules('pm', '', 'required');
            $this->form_validation->set_rules('ppico', '', 'required');
            $this->form_validation->set_rules('tarifa', 'Tarifa', 'required');
            $this->form_validation->set_rules('pinver', '', 'required');
            $this->form_validation->set_rules('area', '', 'required');
            $this->form_validation->set_rules('qm', '', 'required');
            $this->form_validation->set_rules('em', '', 'required');
            $this->form_validation->set_rules('kwp', '', 'required');

            if ($this->form_validation->run() === FALSE) {
               return NULL;
           }

           else {
               return TRUE;
           }
        }

    }

    public function load_modal()
    {
        $modal = $this->session->flashdata('modal');

        if(!empty($modal)){

            $data['resposta'] = $modal;

            $this->load->view('modal', $data);

        }

    }



     public function set_logout_msg(){
        $modal =  array(

                        'success'   => TRUE,

                        'class'     => 'success',

                        'message'   => 'sessão finalizada',

                        'title'     => 'saiu'

                    );



        $this->session->set_flashdata('modal', $modal);

         redirect('../home', 'redirect');

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

}

