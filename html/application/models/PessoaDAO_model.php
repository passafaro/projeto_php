<?php

class PessoaDAO_model extends CI_Model {

    public function listar(){

        $this->load->database();
        $this->load->model('Pessoa_model');
        return $this->db->get('pessoa')->custom_result_object('Pessoa_model');

    }


    public function listarPaginacao($pagina, $quantidade_itens_por_pagina, $ordenacao){

        $this->load->database();
        $this->load->model('Pessoa_model');

        $avancarPagina = ($pagina-1) * $quantidade_itens_por_pagina;

        $lista = $this->db->order_by($ordenacao)->get('pessoa', $quantidade_itens_por_pagina, $avancarPagina)->custom_result_object('Pessoa_model');
        
        $quantidade_registros = $this->db->get('pessoa')->num_rows();
        $total_de_paginas = $quantidade_registros / $quantidade_itens_por_pagina;
        
        $dados['pagina_atual'] = $pagina;
        $dados['total_de_paginas'] = ceil($total_de_paginas);
        $dados['lista_pagina'] = $lista;
        
        return $dados;
        
    }

    public function inserir(Pessoa_model $objeto){

            $this->load->database();
            $this->load->model('Pessoa_model');

            if(!$this->db->insert('pessoa', $objeto))
                throw new Exception('Não foi possível inserir os dados');
            
            
    }

    public function buscar($codigo_pessoa){

        $this->load->database();
        $this->load->model('Pessoa_model');
        if(!$pessoa = $this->db->where('id',$codigo_pessoa)->get('pessoa')->custom_row_object(0, 'Pessoa_model'))
            throw new Exception('Dados não localizados');
        
        return $pessoa;

    }

    public function buscar_palavra_chave($palavra_chave){

        $this->load->database();
        $this->load->model('Pessoa_model');

        $this->db->like('nome', $palavra_chave);
        $this->db->or_like('sobrenome', $palavra_chave);
        $this->db->or_like('email', $palavra_chave);
        $this->db->or_like('cidade', $palavra_chave);
        $this->db->or_like('pais', $palavra_chave);
        $this->db->or_like('empresa', $palavra_chave);
        return $this->db->get('pessoa')->custom_result_object('Pessoa_model');

    }

    public function excluir($codigo_pessoa){

        $this->load->database();
        if(!$this->db->where('id',$codigo_pessoa)->delete('pessoa'))
            throw new Exception('Dados não localizados, não foi possível deletar.');

    }

    public function atualizar(Pessoa_model $objeto)
    {
        $this->load->database();
        $this->load->model('Pessoa_model');

        $this->db->where('id', $objeto->getId());
        if(!$this->db->update('pessoa', $objeto))
            throw new Exception('Não foi possível atualizar os dados');

    }



}