<?php
/*
class Pessoa {
  // atributos -> caracteristicas da pessoa
  public $nome;
  public $idade;

  // metodos -> ações que a pessoa pode fazer
  public function falar() {
    echo $this->nome . " de " . $this->idade . " anos, acabou de falar.";
  }
}


$rodrigo = new Pessoa();
$rodrigo->nome = "Rodrigo Santos de Oliveira";
$rodrigo->idade = 27;
$rodrigo->falar();
*/


// atributos publicos -----
/* class Login {
  public $email;
  public $senha;

  public function logar() {
    if ($this->email == "teste@teste.com" && $this->senha == "123456") {
      echo "Logado com sucesso!";
    } else {
      echo "Dados inválidos";
    }
  }
}


$logar = new Login();
$logar->email = "teste@teste.com";
$logar->senha = "1234567";
$logar->logar();
 */

/* // atributos privados, utilizando get e set
class Login {
  private $email;
  private $senha;

  public function getEmail() {
    return $this->email;
  }
  public function setEmail($e) {
    $email = filter_var($e, FILTER_SANITIZE_EMAIL); // filtrando caracteres especiais no email.
    $this->email = $email;
  }
  public function getSenha() {
    return $this->senha;
  }
  public function setSenha($e) {
    $this->senha = $e;
  }

  public function logar() {
    if ($this->email == "teste@teste.com" && $this->senha == 123456) {
      echo "Logado com sucesso!";
    } else {
      echo "Dados inválidos";
    }
  }
}


$logar = new Login();
$logar->setEmail('teste@teste.com');
$logar->setSenha(123456);

$logar->logar();
echo "<br>";
$logar->getEmail();
echo $logar->getEmail();
echo "<br>";
echo md5(md5($logar->getSenha())); // aqui dei uma brincadinha
 */

// PRATICANDO 
/* class Login {
  private $email;
  private $senha;

  public function getEmail() {
    return $this->email;
  }
  public function getSenha() {
    return $this->senha;
  }

  public function setEmail($e) {
    $email = filter_var($e, FILTER_SANITIZE_EMAIL);
    $this->email = $email;
  }
  public function setSenha($e) {
    $this->senha = $e;
  }

  public function logar() {
    if ($this->email == "teste@teste.com" && $this->senha == 123456) {
      echo "Login efetuado com sucesso!";
    } else {
      echo "Dados invalidos, tente novamente ou entre em contato com o suporte.";
    }
  }
}
$conta = new Login();
$conta->setEmail('teste@teste.co()\m'); // FILTER_SANITIZER_EMAIL retirou os caracteres "(")\"
$conta->setSenha(123456);

$conta->logar();

print "<br>";
echo $conta->getEmail();
print "<br>";
echo $conta->getSenha();
 */
// Constructor
