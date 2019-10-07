<?php 
require_once('funcoes.php');
include(HEADER_TEMPLATE);
add();
?>
<div class="Row">
<div class="jumbotron jumbotron-fluid">
<h1 class="display-4">Cadrastro de Veiculos</h1>
</div>
<div class="Row">
<form action="add.php" method="post">
    <br>
    <div class="form-group">
        <a>Nome do  veiculo</a>
        <input type="text" class="form-control" placeholder="Nome" name="veiculo[nome_veiculo]">
    </div>
    <div class="form-group row">
    <div class="col-4">
        <a>Modelo</a> 
        <input type="text" class="form-control" placeholder="Modelo" name="veiculo[modelo]">
    </div>
    <div class="col-4">
        <a>Marca</a> 
        <input type="text" class="form-control" placeholder="Marca" name="veiculo[marca]">
    </div>
    <div class="col-4">
        <a>Ano de lançamento</a> 
        <input type="text" class="form-control" placeholder="Ano de Lançamento" name="veiculo[ano_lancamento]">
    </div>
    <div class="col-4">
        <a>Tipo</a> 
        <!-- Exemplo de único botão danger -->
        <div class="btn-group" >
            <select name="veiculo[tipo]">
                <option value="4">Econômico</option>
                <option value="5">Intermediario</option>
                <option value="6">Executivo</option>
            </select>
        </div>
    </div> 
    <div class="col-4">
        <a>Funcionário</a> 
        <!-- Exemplo de único botão danger -->
        <div class="btn-group" >
            <select name="veiculo[funcionario]">
                <option value="4">Camile</option>
                <option value="5">Letícia</option>
                <option value="6">Angela</option>
            </select>
        </div>
    </div>
    <div class="col-4">
        <a>Situacao</a> 
         <!-- Exemplo de único botão danger -->
         <div class="btn-group" >
            <select  name="veiculo[situacao]">
                <option value="4">Disponível</option>
                <option value="5">Alugado</option>
                <option value="6">Manutenção</option>
            </select>
        </div>
    </div>
    <div class="col-4">
        <a>Passageiros</a> 
        <input type="text" class="form-control" placeholder="Passageiros" name="veiculo[passageiros]">
    </div>
    <div class="col-4">
        <a>Ar Condicionado</a> 
        <input type="text" class="form-control" placeholder="Ar" name="veiculo[ar_condicionado]">
    </div>
    <div class="col-4">
        <a>Direção Hidraulica</a> 
        <input type="text" class="form-control" placeholder="Direção" name="veiculo[direcao_hidraulica]">
    </div>
    <div class="col-4">
        <a>Portas</a> 
        <input type="text" class="form-control" placeholder="Portas" name="veiculo[portas]">
    </div>
    <div class="col-4">
        <a>Vidros</a> 
        <input type="text" class="form-control" placeholder="Vidros" name="veiculo[vidros]">
    </div>
    <div class="col-4">
        <a>Travas eletricas</a> 
        <input type="text" class="form-control" placeholder="Travas" name="veiculo[travas_eletricas]">
    </div>
    <div class="col-4">
        <a>Airbag</a> 
        <input type="text" class="form-control" placeholder="Airbag" name="veiculo[airbag]">
    </div>
    <div class="col-4">
        <a>Freios ABS</a> 
        <input type="text" class="form-control" placeholder="Freios" name="veiculo[freios_abs]">
    </div>
    <div class="col-4">
        <a>Cambio</a> 
        <input type="text" class="form-control" placeholder="Cambio" name="veiculo[cambio]">
    </div>
    <div class="col-4">
        <a>Radio</a> 
        <input type="text" class="form-control" placeholder="Radio" name="veiculo[radio]">
    </div>
    <div class="col-4">
        <a>Malas</a> 
        <input type="text" class="form-control" placeholder="Malas" name="veiculo[malas]">
    </div>
    </div>
<button type="submit" class="btn btn-primary">Salvar</button>
<a href="list.php" class="btn btn-default"> Voltar </a>
</form>
</div>
<?php include(FOOTER_TEMPLATE); ?>