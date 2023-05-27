<?php
class Pessoa {
  // atributos -> caracteristicas da pessoa
  public $nome;
  public $idade;

  // metodos -> ações que a pessoa pode fazer
  public function falar() {
    echo $this->nome . " de " . $this->idade . " anos, acabou de falar.";
  }
}

/*
$rodrigo = new Pessoa();
$rodrigo->nome = "Rodrigo Santos de Oliveira";
$rodrigo->idade = 27;
$rodrigo->falar();
*/
