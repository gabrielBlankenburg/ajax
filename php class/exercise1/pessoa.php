<?php
class Pessoa{
    public $nome, $sexo, $idade, $vegetariana;
    
    public function __construct($nome, $sexo, $idade, $vegetariana){
        $this->nome = $nome;
        $this->sexo = $sexo;
        $this->idade = $idade;
        $this->vegetariana = $vegetariana;
    }
}