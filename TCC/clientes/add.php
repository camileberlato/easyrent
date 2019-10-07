<?php 
require_once('../config.php');
require_once(DBAPI);
require_once('funcoes.php');
include(HEADER_TEMPLATE);
add();
?>
<div class="Row">
    <div class="jumbotron jumbotron-fluid">
    <h1 class="display-4">Cadrastro de Clientes</h1>
    </div>
        <div class="Row">
            <form action="add.php" method="post">
            <br>
            <div class="form-group">
                <a>Nome do  Cliente</a>
                <input type="text" class="form-control" placeholder="Nome" name="cliente[nome]">
            </div>
            <div class="form-group row">
            <div class="col-4">
                <a>CPF</a> 
                <input type="text" class="form-control" placeholder="CPF" name="cliente[CPF]">
            </div>
            <div class="col-4">
                <a>CNH</a> 
                <input type="text" class="form-control" placeholder="CNH" name="cliente[CNH]">
            </div>
            <div class="col-4">
                <a>CEP</a> 
                <input type="text" class="form-control" placeholder="CEP" name="cliente[CEP]">
            </div>
            <div class="col-4">
                <a>Estado</a> 
                <input type="text" class="form-control" placeholder="Estado" name="cliente[estado]">
            </div>
            <div class="col-4">
                <a>Cidade</a> 
                <input type="text" class="form-control" placeholder="Cidade" name="cliente[cidade]">
            </div>
            <div class="col-4">
                <a>Bairro</a> 
                <input type="text" class="form-control" placeholder="Bairro" name="cliente[bairro]">
            </div>
            <div class="col-4">
                <a>Rua</a> 
                <input type="text" class="form-control" placeholder="Rua" name="cliente[rua]">
            </div>
            <div class="col-4">
                <a>Telefone</a> 
                <input type="text" class="form-control" placeholder="Telefone" name="cliente[telefone]">
            </div>
            <div class="col-4">
                <a>Número</a> 
                <input type="text" class="form-control" placeholder="Número" name="cliente[numero]">
            </div>
            <div class="col-4">
                <a>Funcionário</a> 
                <!-- select -->
                <?php
                //$valor = 0;
               // $nome = "";

                  //  $sql = $database ->prepare("SELECT FROM CLIENTE WHERE IDCLIENTE=?");
                  //  $sql->bindValue(1,$idcliente,PDO::PARAM_INT);
                    //$sql->execute();
                    
                //for($cont = 0; $cont ;$cont ++){
                    ?>
                <div class="btn-group" >
                    <select name="cliente[funcionario]">
                        <option value="4">Camile</option>
                        <option value="5">Letícia</option>
                        <option value="6">Angela</option>
                    </select>
                </div>
            </div>
            <div class="col-4">
                <a>Usuário Cliente</a> 
                <div class="btn-group" >
                <fieldset disabled>
                <input type="text" value="5" class="form-control" placeholder="5">
                </fieldset>
                <input type="hidden" value="5" class="form-control" placeholder="5" name="cliente[usuario]">
                </div>
            </div>
            <div class="col-4">
                <a>Pagamento</a> 
                <!-- select -->
                <div class="btn-group" >
                    <select name="cliente[pagamento]">
                        <option value="4">Dinheiro</option>
                        <option value="5">Crédito</option>
                        <option value="6">Débito</option>
                    </select>
                </div>
            </div>
            </div>
            <button type="submit" class="btn btn-primary">Salvar</button>
            <a href="list.php" class="btn btn-default"> Voltar </a>
            </form>
</div>
<?php include(FOOTER_TEMPLATE); ?>