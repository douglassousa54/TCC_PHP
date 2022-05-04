<?php

class Layout 
{
    

                public function conteudo($pagina){
                    include $pagina.'.php';

                }

                public function  inicio()
                {
                    $this->conteudo('cabeçalho');
                    $this->conteudo('Navbar');
                   
                }
}
