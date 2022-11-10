<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$this->contruir_pagina(1);		
	}

	
	public function abrir_pagina()
	{
		$this->contruir_pagina($this->uri->segment(2));
	}
	

	public function contruir_pagina($pagina)
	{
		$this->load->model('PessoaDAO_model');
		$pessoaDAO = new PessoaDAO_model();
				
		
		
		$ordenacao = NULL;	

		if(isset($this->session->userdata[SESSION_ORDENACAO]))
			$ordenacao = $this->session->userdata[SESSION_ORDENACAO]['tipo_de_ordem'];		

		if($this->input->post('ordenacao')){
			
			switch($this->input->post('ordenacao')){
				case 1:	
						$ordenacao = "nome asc";
						$descricao_campo_input = "Ordem A - Z";	  
						break;
				case 2:	
						$ordenacao = "nome desc";	 
						$descricao_campo_input = "Ordem Z - A"; 
						break;
				case 3:	
						$ordenacao = "salario asc";	
						$descricao_campo_input = "Menor Salário";  
						break;
				case 4:	
						$ordenacao = "salario desc"; 
						$descricao_campo_input = "Maior Salário"; 
						break;
				default: $ordenacao = NULL;
			}

			$dadosSessao = array('tipo_de_ordem' => $ordenacao, 'descricao_campo_input'=> $descricao_campo_input);
			$this->session->set_userdata(SESSION_ORDENACAO, $dadosSessao);	

		} 


		$lista = $pessoaDAO->listarPaginacao($pagina, 12, $ordenacao);
		


		//estrutura navegador paginação
		$pagina_inicio = $lista['pagina_atual']-2;
		if($pagina_inicio<1)
			$pagina_inicio=1;
				
		$pagina_fim = $pagina_inicio + 4;

		if($pagina_fim>$lista['total_de_paginas']){
			$pagina_inicio=$lista['total_de_paginas']-4;
			$pagina_fim = $pagina_inicio + 4;
			
			if($pagina_inicio<1)
				$pagina_inicio=1;
		}


		$dados = array(		'lista_pessoas' => $lista['lista_pagina'], 
							'pagina_atual' => $lista['pagina_atual'], 
							'total_de_paginas' => $lista['total_de_paginas'],
							'pagina_inicio' => $pagina_inicio,
							'pagina_fim' => $pagina_fim,
							'telas' => array('topo-paginacao', 'home')
					);
		$this->load->view('principal', $dados);
	}







}
