<?php

function ListarProdutos() {

    $api = 'http://localhost/APIRest/api/v1';

    $classe = 'estoque';
    $metodo = 'mostrar';
    
    $montar = $api.'/'.$classe.'/'.$metodo;
    
    $retorno = file_get_contents($montar);
    
    $get = json_decode($retorno, true);
    
    $item = $get['dados'];
    
    if($_GET) {
      $url = explode('/', $_GET['url']);
      require_once 'pages/'.$url[0].'.php';
    }
}
    