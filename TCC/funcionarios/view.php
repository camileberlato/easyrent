<?php
require_once('funcoes.php');
view($_GET['id']);
?>

<?php include(HEADER_TEMPLATE); ?>

    <h2>Funcionário <?php echo $funcionario['idfuncionario']; ?></h2>
    <hr>

<?php if (!empty($_SESSION['message'])) : ?>
<div class="alert alert-<?php echo $_SESSION['type']; ?>"><?php echo $_SESSION['message']; ?>
</div>
<?php endif; ?>
<dl class="row">
<dt class="col-sm-2"> ID: </dt>
<dd class="col-sm-10"><?php echo $funcionario['idfuncionario']; ?></dd>

<dt class="col-sm-2"> Nome: </dt>
<dd class="col-sm-10"><?php echo utf8_encode($funcionario['nome_completo']); ?></dd>

<dt class="col-sm-2"> CPF: </dt>
<dd class="col-sm-10"><?php echo $funcionario['CPF']; ?></dd>

<dt class="col-sm-2"> RG: </dt>
<dd class="col-sm-10"><?php echo $funcionario['RG']; ?></dd>

<dt class="col-sm-2"> Pagamento: </dt>
<dd class="col-sm-10"><?php echo $funcionario['pagamento']; ?></dd>

<dt class="col-sm-2"> Usuário: </dt>
   <!--Usuário-->
   <?php
    if ( $funcionario['usuario'] == 4 ){
        ?>
        <dd class="col-sm-10">Funcionário</dd>
        <?php
    }
    ?>
    <?php
    if ( $funcionario['usuario'] == 5 ){
        ?>
        <dd class="col-sm-10">Cliente</dd>
        <?php
    }
    ?>
    <?php
    if ( $funcionario['usuario'] == 6 ){
        ?>
        <dd class="col-sm-10">Administrador</dd>
        <?php
    }
    ?>
<div id="actions" class="row">
<div class="col-md-12">
<a href="edit.php?id=<?php echo $funcionario['idfuncionario'] ?>" class="btn btn-sm btn-primary"><i class="fa fa-pencil-alt"></i> Editar </a>
<a href="list.php" class="btn btn-default"> Voltar </a>
</div>
</div>

<?php include(FOOTER_TEMPLATE); ?>



