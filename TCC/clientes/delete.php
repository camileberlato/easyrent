<?php
    require_once('funcoes.php');

    if(isset($_GET['id'])){
        delete($_GET['id']);
        header('location: '.BASEURL.'clientes/list.php');
    }
    else
    {
        die("ERRO: ID não definido.");
    }
?>