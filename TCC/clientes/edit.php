<?php
require_once('funcoes.php');
edit();
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Alterar Cliente</h2>

<form action="edit.php?id=<?php echo $cliente['idcliente'] ?>" method="POST">
<!-- area de campos do form -->
<hr>

<div class="container">
        <form action="edit.php" method="POST">
            <br>
            <div class="form-group">
                <a>Nome do  Cliente</a>
                <input type="text" class="form-control" name="cliente[nome]" value="<?php echo $cliente['nome'] ?>">
            </div>
            <div class="form-group row">
            <div class="col-4">
                <a>CPF</a> 
                <input type="text" class="form-control" name="cliente[CPF]" value="<?php echo $cliente['CPF'] ?>">
            </div>
            <div class="col-4">
                <a>CNH</a> 
                <input type="text" class="form-control" name="cliente[CNH]" value="<?php echo $cliente['CNH'] ?>">
            </div>
            <div class="col-4">
                <a>CEP</a> 
                <input type="text" class="form-control" name="cliente[CEP]" value="<?php echo $cliente['CEP'] ?>">
            </div>
            <div class="col-4">
                <a>Estado</a> 
                <input type="text" class="form-control" name="cliente[estado]" value="<?php echo $cliente['estado'] ?>">
            </div>
            <div class="col-4">
                <a>Cidade</a> 
                <input type="text" class="form-control" name="cliente[cidade]" value="<?php echo $cliente['cidade'] ?>">
            </div>
            <div class="col-4">
                <a>Bairro</a> 
                <input type="text" class="form-control" name="cliente[bairro]" value="<?php echo $cliente['bairro'] ?>">
            </div>
            <div class="col-4">
                <a>Rua</a> 
                <input type="text" class="form-control" name="cliente[rua]" value="<?php echo $cliente['rua'] ?>">
            </div>
            <div class="col-4">
                <a>Telefone</a> 
                <input type="text" class="form-control" name="cliente[telefone]" value="<?php echo $cliente['telefone'] ?>">
            </div>
            <div class="col-4">
                <a>Número</a> 
                <input type="text" class="form-control" name="cliente[numero]" value="<?php echo $cliente['numero'] ?>">
            </div>
            <div class="col-4">
                <a>Funcionário</a> 
                <input type="text" class="form-control" name="cliente[funcionario]" value="<?php echo $cliente['funcionario'] ?>">
            </div>
            <div class="col-4">
                <a>Usuário</a> 
                <input type="text" class="form-control" name="cliente[usuario]" value="<?php echo $cliente['usuario'] ?>">
            </div>
            <div class="col-4">
                <a>Pagamento</a> 
                <input type="text" class="form-control" name="cliente[pagamento]" value="<?php echo $cliente['pagamento'] ?>">
            </div>
            </div>
            <input type="hidden"  name="cliente[idcliente]" value="<?php echo $cliente['idcliente'] ?>">
            <button type="submit" class="btn btn-primary">Salvar</button>
            <a href="list.php" class="btn btn-default"> Voltar </a>
     </form>
    </div>
    <?php include(FOOTER_TEMPLATE); ?>