<?php
require_once('./pessoa.php');
class Churrasco{
    public $qtdCarne;
    
    public function verificarConsumo($pessoa){
        if($pessoa->idade < 0){
            echo "<script>alert('É necessário inserir um valor maior ou igual a zero');</script>";
            return;
        }
        else if($pessoa->idade <= 3 or $pessoa->vegetariana == 'true'){
            $this->qtdCarne = 0;
        }
        else if($pessoa->idade <= 12){
            $this->qtdCarne = 1;
        }
        else{
            $this->qtdCarne = 2;
        }
        
        echo "Espera-se que $pessoa->nome consuma em média $this->qtdCarne kilos de carne";
    }
}

$pessoa = new Pessoa($_POST['nome'], $_POST['sexo'], $_POST['idade'], $_POST['vegetariana']);
$churrasco = new Churrasco();
$churrasco->verificarConsumo($pessoa);