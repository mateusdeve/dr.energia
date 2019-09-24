<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CalculoDemanda extends CI_Controller {

	public function index()
	{
		$data['js'] = array (
			'modal_open',
            'main',
            'calculoDemanda',
            'jQuery-Mask-Plugin-master/src/jquery.mask',
            'creative.min',
		);

		$data['sessao'] =  $this->get_session();
		$this->load->helper('form');
        $this->load->view('head.php',$data);
        $this->load->view('menu.php',$data);
		$this->load_modal();
		$this->load->view('calculoDemanda_view',$data);
		$this->load->view('footer.php',$data);
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

    public function load_modal()
    {
        $modal = $this->session->flashdata('modal');
        if(!empty($modal)){
            $data['resposta'] = $modal;
            $this->load->view('modal', $data);
        }
        
    }
}
