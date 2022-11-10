<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cadastro extends CI_Controller {


	public function index()
	{


		$dados = array(	'telas' => array('cadastro'),
						'paises' => $this->listaPaises()
				);
		$this->load->view('principal', $dados);

	}

	public function inserir()
	{
		try{

				$this->load->library('form_validation');
				$this->form_validation->set_rules('nome', 		'Nome', 	 'required', array('required' => 'Você deve preencher o campo %s.'));
				$this->form_validation->set_rules('sobrenome', 	'Sobrenome', 'required', array('required' => 'Você deve preencher o campo %s.'));
				$this->form_validation->set_rules('empresa', 	'Empresa', 	 'required', array('required' => 'Você deve preencher o campo %s.'));
				$this->form_validation->set_rules('salario', 	'Salário', 	 'required', array('required' => 'Você deve preencher o campo %s.'));
				$this->form_validation->set_rules('cidade', 	'Cidade', 	 'required', array('required' => 'Você deve preencher o campo %s.'));
				$this->form_validation->set_rules('pais', 		'País', 	 'required', array('required' => 'Você deve preencher o campo %s.'));
				$this->form_validation->set_rules('genero', 	'Gênero', 	 'required|in_list[M,F]', array('required' => 'Você deve preencher o campo %s.','in_list' => 'Opção do campo %s não se encontra na lista'));
				$this->form_validation->set_rules('email', 		'email', 	 'required|valid_emails', array('required' => 'Você deve preencher o campo %s.','valid_emails' => 'Email inválido'));	
				if($this->form_validation->run() == FALSE)
						throw new Exception();

				$this->load->model('Pessoa_model');
				$pessoa = new Pessoa_model();				
				$pessoa->setNome($this->input->post('nome'));
				$pessoa->setSobrenome($this->input->post('sobrenome'));
				$pessoa->setEmail($this->input->post('email'));
				$pessoa->setGenero($this->input->post('genero'));
				$pessoa->setCidade($this->input->post('cidade'));
				$pessoa->setPais($this->input->post('pais'));
				$pessoa->setEmpresa($this->input->post('empresa'));
				$pessoa->setSalario($this->input->post('salario'));

				$this->load->model('PessoaDAO_model');
				$DAO = new PessoaDAO_model();
				$DAO->inserir($pessoa);


				$dados = array(		'telas' 	=> array('aviso-verde', 'cadastro'),
									'mensagem' 	=> 'Dados cadastrados com sucesso!',
									'paises' => $this->listaPaises()
			
				);
				$this->load->view('principal', $dados);

			} catch (Exception $e){
		
				$dados = array(		'telas' 	=> array('aviso', 'cadastro'),
									'mensagem' 	=> $e->getMessage(),
									'paises' => $this->listaPaises()
			
				);
				$this->load->view('principal', $dados);

		}
	}


	public function atualizar()
	{

		try{

			$this->load->model('PessoaDAO_model');
			$DAO = new PessoaDAO_model();
			$pessoa = $DAO->buscar($this->uri->segment(3));


			$dados = array(	'telas' => array('atualizar'),
							'paises' => $this->listaPaises(),
							'pessoa' => $pessoa
			);
			$this->load->view('principal', $dados);




		} catch(Exception $e){

			
				$dados = array(		'telas' 	=> array('aviso'),
									'mensagem' 	=> $e->getMessage(),
									'paises' => $this->listaPaises()
			
				);
				$this->load->view('principal', $dados);
			
		}

	}


	public function atualizar_confirma()
	{
		try{

				$this->load->model('PessoaDAO_model');
				$DAO = new PessoaDAO_model();			
		
				$this->load->model('Pessoa_model');
				$pessoa = new Pessoa_model();	

				$pessoa = $DAO->buscar($this->input->post('id'));

				
				$this->load->library('form_validation');
				$this->form_validation->set_rules('nome', 		'Nome', 	 'required', array('required' => 'Você deve preencher o campo %s.'));
				$this->form_validation->set_rules('sobrenome', 	'Sobrenome', 'required', array('required' => 'Você deve preencher o campo %s.'));
				$this->form_validation->set_rules('empresa', 	'Empresa', 	 'required', array('required' => 'Você deve preencher o campo %s.'));
				$this->form_validation->set_rules('salario', 	'Salário', 	 'required', array('required' => 'Você deve preencher o campo %s.'));
				$this->form_validation->set_rules('cidade', 	'Cidade', 	 'required', array('required' => 'Você deve preencher o campo %s.'));
				$this->form_validation->set_rules('pais', 		'País', 	 'required', array('required' => 'Você deve preencher o campo %s.'));
				$this->form_validation->set_rules('genero', 	'Gênero', 	 'required|in_list[M,F]', array('required' => 'Você deve preencher o campo %s.','in_list' => 'Opção do campo %s não se encontra na lista'));
				$this->form_validation->set_rules('email', 		'email', 	 'required|valid_emails', array('required' => 'Você deve preencher o campo %s.','valid_emails' => 'Email inválido'));	
				if($this->form_validation->run() == FALSE)
						throw new Exception();


				$pessoa->setNome($this->input->post('nome'));
				$pessoa->setSobrenome($this->input->post('sobrenome'));
				$pessoa->setEmail($this->input->post('email'));
				$pessoa->setGenero($this->input->post('genero'));
				$pessoa->setCidade($this->input->post('cidade'));
				$pessoa->setPais($this->input->post('pais'));
				$pessoa->setEmpresa($this->input->post('empresa'));
				$pessoa->setSalario($this->input->post('salario'));

				$DAO->atualizar($pessoa);

				
				$dados = array(		'telas' 	=> array('aviso-verde', 'atualizar_fim'),
									'mensagem' 	=> 'Dados ATUALIZADOS com sucesso!',
									'pessoa' => $pessoa			
				);
				$this->load->view('principal', $dados);
				
			} catch (Exception $e){
		
				$dados = array(		'telas' 	=> array('aviso'),
									'mensagem' 	=> $e->getMessage()
			
				);
				$this->load->view('principal', $dados);

		}
	}


	public function deletar()
	{
		try{ 

				$this->load->model('PessoaDAO_model');
				$DAO = new PessoaDAO_model();			
		
				$this->load->model('Pessoa_model');
				$pessoa = new Pessoa_model();	

				$pessoa = $DAO->buscar($this->uri-> segment(3));

				$dados = array(		'telas' 	=> array('deletar'),
									'pessoa' => $pessoa			
				);
				$this->load->view('principal', $dados);
			
			} catch (Exception $e){
		
				$dados = array(		'telas' 	=> array('aviso'),
									'mensagem' 	=> $e->getMessage()
				);
				$this->load->view('principal', $dados);

			}
	}

	public function deletar_confirma()
	{
		try{ 

				$this->load->model('PessoaDAO_model');
				$DAO = new PessoaDAO_model();			

				$DAO->excluir($this->input->post('id'));

				$dados = array(		'telas' 	=> array('aviso-verde'),
									'mensagem' 	=> 'Dados EXCLUÍDOS com sucesso!'
				);
				$this->load->view('principal', $dados);
			
			} catch (Exception $e){
		
				$dados = array(		'telas' 	=> array('aviso'),
									'mensagem' 	=> $e->getMessage()
			
				);
				$this->load->view('principal', $dados);

			}
	}
	
	public function listaPaises()
	{
		$jsonurl = base_url() . "lista-de-paises.json";
        $json = file_get_contents($jsonurl);
        return json_decode($json, true);
	}

	public function teste()
	{
		$nrCelular = "R$ 1.234.567,89";
		$valor = preg_replace('/[^0-9,]/', '', $nrCelular);
		echo str_replace(',', '.', $valor);
	}

}

