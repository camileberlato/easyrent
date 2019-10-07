<?php
require_once('funcoes.php');
view($_GET['id']);
?>

<?php include(HEADER_TEMPLATE); ?>

    <h2>Cliente <?php echo $cliente['idcliente']; ?></h2>
    <hr>

<?php if (!empty($_SESSION['message'])) : ?>
<div class="alert alert-<?php echo $_SESSION['type']; ?>"><?php echo $_SESSION['message']; ?>
</div>
<?php endif; ?>
<dl class="row">
<dt class="col-sm-2"> ID: </dt>
<dd class="col-sm-10"><?php echo $cliente['idcliente']; ?></dd>

<dt class="col-sm-2"> Nome: </dt>
<dd class="col-sm-10"><?php echo utf8_encode($cliente['nome']); ?></dd>

<dt class="col-sm-2"> CPF: </dt>
<dd class="col-sm-10"><?php echo $cliente['CPF']; ?></dd>

<dt class="col-sm-2"> CNH: </dt>
<dd class="col-sm-10"><?php echo $cliente['CNH']; ?></dd>

<dt class="col-sm-2"> CEP: </dt>
<dd class="col-sm-10"><?php echo $cliente['CEP']; ?></dd>

<dt class="col-sm-2"> Estado: </dt>
<dd class="col-sm-10"><?php echo $cliente['estado']; ?></dd>

<dt class="col-sm-2"> Cidade: </dt>
<dd class="col-sm-10"><?php echo utf8_encode($cliente['cidade']); ?></dd>

<dt class="col-sm-2">Bairro: </dt>
<dd class="col-sm-10"><?php echo $cliente['bairro']; ?></dd>

<dt class="col-sm-2">Rua: </dt>
<dd class="col-sm-10"><?php echo $cliente['rua']; ?></dd>


<dt class="col-sm-2">Tlefone: </dt>
<dd class="col-sm-10"><?php echo $cliente['telefone']; ?></dd>


<dt class="col-sm-2">Número: </dt>
<dd class="col-sm-10"><?php echo $cliente['numero']; ?></dd>


<dt class="col-sm-2">Funcionário: </dt>
   <!-- arrumar pois se eu cadratrar mais funcionarios vai dar erro -->
   <?php
    if ($cliente['funcionario'] == 4 ){
        ?>
        <dd class="col-sm-10">Camile </dd>
        <?php
    }
    ?>
    <?php
    if ($cliente['funcionario'] == 5 ){
        ?>
        <dd class="col-sm-10">Letícia</dd>
        <?php
    }
    ?>
    <?php
    if ($cliente['funcionario'] == 6 ){
        ?>
        <dd class="col-sm-10">Angela</dd>
        <?php
    }
    ?>

<dt class="col-sm-2">Usuário: </dt>
    <!--Usuário-->
    <?php
    if ( $cliente['usuario'] == 4 ){
        ?>
        <dd class="col-sm-10">Funcionário</dd>
        <?php
    }
    ?>
    <?php
    if ( $cliente['usuario'] == 5 ){
        ?>
        <dd class="col-sm-10">Cliente</dd>
        <?php
    }
    ?>
    <?php
    if ( $cliente['usuario'] == 6 ){
        ?>
        <dd class="col-sm-10">Administrador</dd>
        <?php
    }
    ?>

<dt class="col-sm-2">Pagamento: </dt>
<!--Pagamento-->
    <?php
    if ( $cliente['pagamento'] == 4 ){
        ?>
        <dd class="col-sm-10">Dinheiro</dd>
        <?php
    }
    ?>
    <?php
    if ( $cliente['pagamento'] == 5 ){
        ?>
        <dd class="col-sm-10">Crédito</dd>
        <?php
    }
    ?>
    <?php
    if ( $cliente['pagamento'] == 6 ){
        ?>
        <dd class="col-sm-10">Débito</dd>
        <?php
    }
    ?>
</dl>

<div id="actions" class="row">
<div class="col-md-12">
<a href="edit.php?id=<?php echo $cliente['idcliente'] ?>" class="btn btn-sm btn-primary"><i class="fa fa-pencil-alt"></i> Editar </a>
<a href="list.php" class="btn btn-default"> Voltar </a>
</div>
</div>

<?php include(FOOTER_TEMPLATE); ?>



