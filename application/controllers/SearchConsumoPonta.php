<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SearchConsumoPonta extends CI_Controller {

	private $post; 
    public function __construct() 
    {
        parent::__construct();
        $this->post = $this->input->post();
        $this->load->model('search_model');
    }

	public function index()
	{
        $cliente = NULL;
        $sessao = $this->session->all_userdata();
        $where = $sessao['id'];

        $cliente = $this->search_model->listar_cliente($where);

        // Adicionando no array dados um item 0 na posição 0
        $dados = array();
        array_push($dados,[
            'mes'           =>      '0',
            'consumoPonta'   =>      '0'
        ]);

        // adicionando no array dados todos os itens do array cliente vindo do banco
        foreach ($cliente as $key => $value) {
            $dados[$key+1] = $value;
        }

        // criando a variavel para armazenar o maior valor
        $maiorval = NULL;

        // percorrendo a segunda dimenção do array cliente a procura do maior valor
        foreach ($cliente as $key => $value) {
            foreach ($value as $code => $val) {
                if($code == 'consumoPonta' && $val > $maiorval){
                    $maiorval = $val;
                }
            }
        }

        // adicionando ao array dados na ultima posição item do maior valor multiplicado por 2
        array_push($dados,[
            'mes'           =>  '...',
            'consumoPonta'   =>  $maiorval*2
        ]);
        
        print_r(json_encode($dados));

    }

}
