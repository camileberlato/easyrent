<?php
require_once('funcoes.php');
edit();
?>
<?php include(HEADER_TEMPLATE); ?>

<h2>Alterar Funcionário</h2>

<form action="edit.php?id=<?php echo $funcionario['idfuncionario'] ?>" method="POST">
<!-- area de campos do form -->
<hr>

<div class="container">
    <form action="edit.php" method="POST">
            <br>
            <div class="form-group">
                <a>Nome do  Funcionários</a>
                <input type="text" class="form-control" name="funcionario[nome_completo]" value="<?php echo $funcionario['nome_completo'] ?>">
            </div>
            <div class="form-group row">
            <div class="col-4">
                <a>CPF</a> 
                <input type="text" class="form-control" name="funcionario[CPF]" value="<?php echo $funcionario['CPF'] ?>">
            </div>
            <div class="col-4">
                <a>RG</a> 
                <input type="text" class="form-control" name="funcionario[RG]" value="<?php echo $funcionario['RG'] ?>">
            </div>
            <div class="col-4">
                <a>Pagamento</a> 
                <input type="text" class="form-control" name="funcionario[pagamento]" value="<?php echo $funcionario['pagamento'] ?>">
            </div>
            <div class="col-4">
                <a>Usuário</a> 
                <input type="text" class="form-control" name="funcionario[usuario]" value="<?php echo $funcionario['usuario'] ?>">
            </div>
            </div>
            <input type="hidden"  name="funcionario[idfuncionario]" value="<?php echo $funcionario['idfuncionario'] ?>">
            <button type="submit" class="btn btn-primary">Salvar</button>
            <a href="list.php" class="btn btn-default"> Voltar </a>
     </form>
    </div>
    <?php include(FOOTER_TEMPLATE); ?>