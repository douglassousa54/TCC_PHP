<?php
require_once "Layout.php";

$teste = new Layout();
$teste->inicio();


if(!isset($_GET['opcao'])){
$opcao = '';
} else {
    $opcao = $_GET['opcao'];
switch ($opcao) {
    case 'sobre':
      $teste->conteudo('sobre');
    break;
    
    case 'valor':
     $teste->conteudo('precos');
    break;

    default: 

    break;
    
}
}

$teste->conteudo('rodape');
