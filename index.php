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

/* // Herança
class Veiculo {
  private $modelo;
  private $cor;
  private $ano;

  public function mover() {
  }
  public function parar() {
  }

  public function setAttribute($modelo, $cor, $ano) {
    $this->modelo = $modelo;
    $this->cor = $cor;
    $this->ano = $ano;
  }

  public function getModelo() {
    return $this->modelo;
  }
  public function getCor() {
    return $this->cor;
  }
  public function getAno() {
    return $this->ano;
  }

  public function getAllAttributes() {
    $obj = [
      $this->modelo,
      $this->cor,
      $this->ano
    ];
    return $obj;
  }
}
class Carro extends Veiculo {
}
$carro = new Carro();
$carro->setAttribute('Toyota', 'Preto', '2025');

foreach ($carro->getAllAttributes() as $valor) {
  echo "$valor <br>";
}
*/

/* Public, Private, Protected 

Protected
 só podemos acessar ou módificar os atributos deste modelo dentro do escopo
 da classe principal ou de classes que herdam da classe principal

 
Private
 só podemos acessar ou modificar os atributos deste tipo dentro do escopo da classe principal 



Public
 podemos acessar de qualquer lugar.
 */
/* 
abstract class Banco {
  protected $saldo;
  protected $limiteSaque;
  protected $juros;

  abstract protected function Sacar($saque);
  abstract protected function Depositar($deposito);
}
class Itau extends Banco {
  public function setSaldo($valor) {
    return $this->saldo = $valor;
  }

  // get
  public function getSaldo() {
    $this->saldo = $this->saldo ?? 0;
    echo "<hr>Saldo atual R$: $this->saldo ";
  }

  public function refreshSaldo($saldoAtual) {
    $this->saldo = "$saldoAtual";
    echo "<br>";
    $this->getSaldo();
  }

  public function Sacar($saque) {
    $this->saldo -= $saque;
    $saldoAtual = $this->saldo;
    echo "<hr>Foi realizado um saque no valor de R$: $saque em sua conta.";
    $this->refreshSaldo($saldoAtual);
  }
  public function Depositar($deposito) {
    $this->saldo += $deposito;
    $saldoAtual = $this->saldo;

    echo "<hr>O depósito de R$: $deposito já está disponivel em sua conta.";
    $this->refreshSaldo($saldoAtual);
  }
}
$itau = new Itau();
$itau->getSaldo();
$itau->Sacar(450);
$itau->Sacar(100);
$itau->Depositar(650);
 */

// constantes, self e parent;
/* class Pessoa {
  const nome = "Rodrigo";

  public function eN() {
    echo self::nome;
  }
}
class Rodrigo extends Pessoa {
  const nome = "Oliveira";

  public function eN() {
    echo parent::nome;
  }
}

$rodrigo = new Rodrigo();
$rodrigo->eN();
 */




/*  treino
// sistema sisples de banco,
// a pessoa pode sacar e depositar

abstract class Banco {
  protected $saldo;

  abstract protected function Sacar($saque);
  abstract protected function Depositar($deposito);
}

class Itau extends Banco {

  public function getSaldo() {
    $contentSaldo = $this->saldo = $this->saldo ?? 0;
    return "Saldo atual R$: $contentSaldo";
  }

  public function handleSaldo($saldoAtual) {
    $this->saldo = $saldoAtual;
    echo "<br><br>";
    echo $this->getSaldo();
  }

  public function Sacar($saque) {
    $saldoAtual = $this->saldo -= $saque;
    echo "<hr>Foi debitado R$ $saque de sua conta.";
    $this->handleSaldo($saldoAtual);
    return $this->getSaldo();
  }

  public function Depositar($deposito) {
    $saldoAtual = $this->saldo += $deposito;
    echo "<hr>Foi creditado em sua conta um valor de R$ $deposito.";
    $this->handleSaldo($saldoAtual);
    return $this->getSaldo();
  }
}

$itau = new Itau();
echo $itau->getSaldo();
$itau->Depositar(100);
$itau->Depositar(100);
$itau->Sacar(50);
$itau->Sacar(50);
$itau->Sacar(50);
 */


// statics methods and attributes
// em metodos e atributos statics se usa o self ao invez de this.
// para chamar, utilizar metodos e atributos statics usamos ::$
// diferente quando estamos acessando a constante que não precisamos usar o $

/* class Pessoa {
  public static $user;

  public static function verificarLogin() {
    echo "O usuário " . self::$user . " está logado!";
  }
}
Pessoa::$user = "admin";
Pessoa::verificarLogin();
 */
/* 
class Login {
  public static $user;
  public static function logar() {
    echo "O usuário " . self::$user . " logou.";
  }

  public function Deslogar() {
    echo "O usuário " . self::$user . " deslogou.";
  }
}

$admin = new Login();

$admin::$user = "Admin";
// $admin::logar();
$admin->Deslogar();
 */

/* 
// Polimorfismo
// Substituir ou reescrever um método da classe pai.
class Animal {
  public function Correr() {
    echo "O animal correu";
  }
  public function Andar() {
    echo "O animal andou.";
  }
}

class Cavalo extends Animal {
  public function Andar() {
    $this->Correr();
  }
}

$animal = new Cavalo();
$animal->Andar();
 */
/* 
// Todos os methodos da interface devem ser publicos
// por padrão todos os methodos são abstratos
// isso significa que eles dever aparecer na implementação da mesma forma que foram criados na inteface
interface Crud {
  public function Create($data);
  public function Read();
  public function Update();
  public function Delete();
}

// diferente de extends que usamos em herança,
// para instanciar uma classe de uma interface utilizamos o implements
class Noticia implements Crud {

  public function Create($data) {
    //
  }
  public function Read() {
    //
  }
  public function Update() {
    //
  }
  public function Delete() {
    //
  }
}
 */
/* 
// require em php não usa () ou =
require 'classes/produtos.php';
require 'models/produtos.php';

// não esquecer de adicionar a tag namespaces nos arquivos que estão sendo requiridos
use models\Produtos as productModels;
use classes\Produtos as productClass;

$produto = new productClass();
$produto->Detalhes();
$produto2 = new productModels();
echo "<br>";
$produto2->Detalhes();
 */