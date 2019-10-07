<?php
require_once('funcoes.php');
edit();
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Alterar Veiculo</h2>

<form action="edit.php?id=<?php echo $veiculo['idveiculo'] ?>" method="POST">
<!-- area de campos do form -->
<hr>

<div class="container">
    <form action="edit.php" method="POST">
            <br>
            <div class="form-group">
                <a>Nome do  veiculo</a>
                <input type="text" class="form-control" name="veiculo[nome_veiculo]" value="<?php echo $veiculo['nome_veiculo'] ?>">
            </div>
            <div class="form-group row">
                <div class="col-4">
                    <a>Modelo</a> 
                    <input type="text" class="form-control" name="veiculo[modelo]" value="<?php echo $veiculo['modelo'] ?>">
                </div>
                <div class="col-4">
                    <a>Marca</a> 
                    <input type="text" class="form-control" name="veiculo[marca]" value="<?php echo $veiculo['marca'] ?>">
                </div>
                <div class="col-4">
                    <a>Ano de lançamento</a> 
                    <input type="text" class="form-control" name="veiculo[ano_lancamento]" value="<?php echo $veiculo['ano_lancamento'] ?>">
                </div>
                    <a>tipo</a> 
                    <input type="text" class="form-control" name="veiculo[tipo]" value="<?php echo $veiculo['tipo'] ?>">
                </div> 
                <div class="col-4">
                    <a>Funcionario</a> 
                    <input type="text" class="form-control" name="veiculo[funcionario]" value="<?php echo $veiculo['funcionario'] ?>">
                </div>
                <div class="col-4">
                    <a>Situacao</a> 
                    <input type="text" class="form-control" name="veiculo[situacao]" value="<?php echo $veiculo['situacao'] ?>">
                </div>
                <div class="col-4">
                    <a>Passageiros</a> 
                    <input type="text" class="form-control" name="veiculo[passageiros]" value="<?php echo $veiculo['passageiros'] ?>">
                </div>
                <div class="col-4">
                    <a>Ar Condicionado</a> 
                    <input type="text" class="form-control" name="veiculo[ar_condicionado]" value="<?php echo $veiculo['ar_condicionado'] ?>">
                </div>
                <div class="col-4">
                    <a>Direção Hidraulica</a> 
                    <input type="text" class="form-control" name="veiculo[direcao_hidraulica]" value="<?php echo $veiculo['direcao_hidraulica'] ?>">
                </div>
                <div class="col-4">
                    <a>Portas</a> 
                    <input type="text" class="form-control" name="veiculo[portas]" value="<?php echo $veiculo['portas'] ?>">
                </div>
                <div class="col-4">
                    <a>Vidros</a> 
                    <input type="text" class="form-control" name="veiculo[vidros]" value="<?php echo $veiculo['vidros'] ?>">
                </div>
                <div class="col-4">
                    <a>Travas eletricas</a> 
                    <input type="text" class="form-control" name="veiculo[travas_eletricas]" value="<?php echo $veiculo['travas_eletricas'] ?>">
                </div>
                <div class="col-4">
                    <a>Airbag</a> 
                    <input type="text" class="form-control" name="veiculo[airbag]" value="<?php echo $veiculo['airbag'] ?>">
                </div>
                <div class="col-4">
                    <a>Freios ABS</a> 
                    <input type="text" class="form-control" name="veiculo[freios_abs]" value="<?php echo $veiculo['freios_abs'] ?>">
                </div>
                <div class="col-4">
                    <a>Cambio</a> 
                    <input type="text" class="form-control" name="veiculo[cambio]" value="<?php echo $veiculo['cambio'] ?>">
                </div>
                <div class="col-4">
                    <a>Radio</a> 
                    <input type="text" class="form-control" name="veiculo[radio]" value="<?php echo $veiculo['radio'] ?>">
                </div>
                <div class="col-4">
                    <a>Malas</a> 
                    <input type="text" class="form-control" name="veiculo[malas]" value="<?php echo $veiculo['malas'] ?>">
                </div>
            </div>
            <input type="hidden"  name="veiculo[idveiculo]" value="<?php echo $veiculo['idveiculo'] ?>">
            <button type="submit" class="btn btn-primary">Salvar</button>
            <a href="list.php" class="btn btn-default"> Voltar </a>
     </form>
    </div>
<?php include(FOOTER_TEMPLATE); ?>