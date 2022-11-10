<?php

class Pessoa_model extends CI_Model {

    public $id;
    public $nome;
    public $sobrenome;
    public $email;
    public $genero;
    public $cidade;
    public $pais;
    public $empresa;
    public $salario;

    public function getId (){ return $this->id; }
    public function setId ($id){ $this->id = $id; }
    
    public function getNome (){ return $this->nome; }
    public function setNome ($nome){ $this->nome = $nome; }

    public function getSobrenome (){ return $this->sobrenome; }
    public function setSobrenome ($sobrenome){ $this->sobrenome = $sobrenome; }

    public function getEmail (){ return $this->email; }
    public function setEmail ($email){ $this->email = $email; }

    public function getGenero (){ return $this->genero;     }

    public function getGeneroAjustado (){ 
        if($this->genero == "M")
            return "Masculino"; 
        else
            return "Feminino";    
    }

    public function setGenero ($genero){ $this->genero = $genero; }

    public function getCidade (){ return $this->cidade; }
    public function setCidade ($cidade){ $this->cidade = $cidade; }

    public function getPais (){ return $this->pais; }
    public function setPais ($pais){ $this->pais = $pais; }

    public function getEmpresa (){ return $this->empresa; }
    public function setEmpresa ($empresa){ $this->empresa = $empresa; }

    public function getSalario (){ return "R$ ".number_format($this->salario, 2, ",","."); }
    public function setSalario ($salario){ 

        $nrCelular = $salario;
		$valor = preg_replace('/[^0-9,]/', '', $nrCelular);
		$this->salario = str_replace(',', '.', $valor);

    }

}