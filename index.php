<?php
//importação de arquivo produto.php
require_once "src/classes/carro.php";
//importação de arquivo Cliente.php
require_once "src/classes/Cliente.php";


//intancia do carro
$prod1 = new carro;
$prod1 -> marca = "audi";
$prod1 -> descricao = "carro alemão";
$prod1 -> preco = 500.000;
$prod1 -> nome = "audi tt";


$prod1 = new carro;
$prod1 -> marca = "chevrolet";
$prod1 -> descricao = "carro EUA";
$prod1 -> preco = 100.000;
$prod1 -> nome = "opala";


var_dump($prod1);
echo "<br>";
var_dump($prod2);

$cli = new Cliente;
$cli -> nome = "gustavo";
$cli -> idade = 20;
$cli -> endereco = "Rua B";
$cli -> telefone = "41-xxxx-xxxx";

$cli ->comprar();
echo "<br>";
var_dump($cli);