<?php
require_once "Layout.php";

$teste = new Layout();
$teste->conteudo('cabeçalho');
$teste->conteudo('Navbar');

switch ($teste) {
    case 'Descomplica Vet':
         $teste->conteudo('sobre');
        break;
    
    default:
        # code...
        break;
}
if (false){
    $teste->conteudo('Criadores');
}else{
    $teste->conteudo('sobre');
}
;

