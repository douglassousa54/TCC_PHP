<?php
require_once "Layout.php";

$teste = new Layout();
$teste->conteudo('cabeçalho');
$teste->conteudo('Navbar');
if (false){
    $teste->conteudo('Criadores');
}else{
    $teste->conteudo('sobre');
}
;

