<?php 
require_once('funcoes.php');
include(HEADER_TEMPLATE);
add();
?>
<div class="Row">
<div class="jumbotron jumbotron-fluid">
<h1 class="display-4">Cadrastro de Funcionario</h1>
</div>
<div class="Row">
<form action="add.php" method="post">
    <br>
    <div class="form-group">
        <a>Nome do  Funcionário</a>
        <input type="text" class="form-control" placeholder="Nome" name="funcionario[nome_completo]">
    </div>
    <div class="form-group row">
    <div class="col-4">
        <a>CPF</a> 
        <input type="text" class="form-control" placeholder="CPF" name="funcionario[CPF]">
    </div>
    <div class="col-4">
        <a>RG</a> 
        <input type="text" class="form-control" placeholder="RG" name="funcionario[RG]">
    </div>
    <div class="col-4">
        <a>Pagamento</a> 
        <input type="text" class="form-control" placeholder="Pagamento" name="funcionario[pagamento]">
    </div>
    <div class="col-4">
        <a>Usuários Funcionário</a> 
        <div class="btn-group" >
        <fieldset disabled>
        <input type="text" value="4" class="form-control" placeholder="4">
        </fieldset>
        <input type="hidden" value="4" class="form-control" placeholder="4" name="funcionario[usuario]">
        </div>
    </div> 
    </div>
<button type="submit" class="btn btn-primary">Salvar</button>
<a href="list.php" class="btn btn-default"> Voltar </a>
</form>
</div>
<?php include(FOOTER_TEMPLATE); ?>