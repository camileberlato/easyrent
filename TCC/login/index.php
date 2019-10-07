<?php 
require_once('../config.php');
require_once('funcoes.php');
index();

include(HEADER_TEMPLATE); 

?>
<h1>Login</h1>
<form action="index.php" method="post">
    <p>Usuário:</p><input type="text" name="login" placeholder="Usuário"><br>
    <p>Senha:</p><input type="password" name="senha" placeholder="Senha"><br>
    <button type="submit" class="btn btn-primary">Logar</button>
</form>

<!--https://forum.codigofonte.net/topic/23263-tutorial-criando-sistema-simples-de-cadastro-e-login/