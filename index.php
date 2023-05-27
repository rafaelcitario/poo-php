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



/* // Constructor
class Login {
  public function __construct($email, $senha, $nome) {
    $this->setEmail($email);
    $this->setSenha($senha);
    $this->nome = $nome;
    return false;
  }
  private $email;
  private $senha;
  private $nome;

  // geters
  public function getEmail() {
    return $this->email;
  }
  public function getSenha() {
    return $this->senha;
  }
  public function getNome() {
    return $this->nome;
  }

  // seters
  public function setEmail($e) {
    $email = filter_var($e, FILTER_SANITIZE_EMAIL);
    $this->email = $email;
  }
  public function setSenha($e) {
    $this->senha = $e;
  }

  public function logar() {
    $validateEmail = $this->email === "teste@teste.com";
    $validateSenha = $this->senha === 123456;
    if ($validateEmail && $validateSenha) {
      echo "Login efetuado com sucesso!<br>";
      echo $this->welcome();
    } else {
      echo "<strong><h1>Algo deu errado \xF0\x9F\x98\x93</h1></strong><br>Tente novamente ou entre em contato com o suporte.<br>";
    }
  }


  public function welcome() {
    echo "<h1>Olá, $this->nome</h1><br>Fico feliz que esteja de volta!";
  }
}

$logger = new Login("teste@teste.com", 1233456, "Rafael Gomes Xavier");
$logger->logar();
echo "<br>";
echo $logger->getEmail();
echo "<br>";
echo $logger->getSenha();
 */