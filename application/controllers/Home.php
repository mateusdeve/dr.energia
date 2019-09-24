<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$data['js'] = array (
			'modal_open',
            'main',
            'creative.min',
		);

		$data['sessao'] =  $this->get_session();
		$this->load->helper('form');
		$this->load->view('head.php',$data);
		$this->load->view('menu.php',$data);
		$this->load_modal();
		$this->load->view('home_view.php',$data);
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

     public function set_logout_msg()
    {
        $modal =  array(
                        'success'   => TRUE,
                        'class'     => 'success',
                        'message'   => 'sessão finalizada',
                        'title'     => 'saiu'
                    );

        $this->session->set_flashdata('modal', $modal);
         redirect('../home', 'redirect');
    }
}
