<?php
require_once('funcoes.php');
view($_GET['id']);
?>

<?php include(HEADER_TEMPLATE); ?>



<?php if (!empty($_SESSION['message'])) : ?>
<div class="alert alert-<?php echo $_SESSION['type']; ?>"><?php echo $_SESSION['message']; ?>
</div>
<?php endif; ?>
<div class="row justify-content-center">
<div class="col-md-9">
<div class="row">
<h2>
<?php echo $veiculo['marca']; ?> <?php echo utf8_encode($veiculo['nome_veiculo']); ?> <?php echo $veiculo['modelo']; ?> 
<?php echo $veiculo['ano_lancamento']; ?>
</h2>

<div class="row justify-content-end">
   <!--Situação-->
   <?php
    if ( $veiculo['situacao'] == 4 ){
        ?>
        <dd class="col-sm-10">Disponível</dd>
        <?php
    }
    ?>
    <?php
    if ( $veiculo['situacao'] == 5 ){
        ?>
        <dd class="col-sm-10">Alugado</dd>
        <?php
    }
    ?>
    <?php
    if ( $veiculo['situacao'] == 6 ){
        ?>
        <dd class="col-sm-10">Manutenção</dd>
        <?php
    }
    ?>
 </div>
 
</div>

<dt class="col-sm-2"> Tipo: </dt>
    <!--Tipo Veículo-->
    <?php
    if (  $veiculo['tipo'] == 4 ){
        ?>
        <dd class="col-sm-10">Econômico</dd>
        <?php
    }
    ?>
    <?php
    if (  $veiculo['tipo'] == 5 ){
        ?>
        <dd class="col-sm-10">Intermediário</dd>
        <?php
    }
    ?>
    <?php
    if (  $veiculo['tipo'] == 6 ){
        ?>
        <dd class="col-sm-10">Executivo</dd>
        <?php
    }
    ?>
<dt class="col-sm-2"> Funcionário: </dt>
<!--Funcionário-->
<?php
    if ( $veiculo['funcionario'] == 4 ){
        ?>
        <dd class="col-sm-10">Camile</dd>
        <?php
    }
    ?>
    <?php
    if ( $veiculo['funcionario'] == 5 ){
        ?>
        <dd class="col-sm-10">Letícia</dd>
        <?php
    }
    ?>
    <?php
    if ( $veiculo['funcionario'] == 6 ){
        ?>
        <dd class="col-sm-10">Angela</dd>
        <?php
    }
    ?>


<!-- imgs do veículo-->
<div class="row">
<div class="col-md-8">

<div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-interval="10000">
      <img src="../img/mobi.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item" data-interval="2000">
      <img src="../img/mobi.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../img/mobi.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>

<!-- tabela com info do veículo-->

<div class="col-md-4">
<table class="table table-bordered">
<tr>
<td>

<dd><i class="mdi mdi-account-multiple"></i> Passageiros: <?php echo $veiculo['passageiros']; ?></dd>
<hr>

<dd><i class="mdi mdi-snowflake"></i> Ar: <?php echo utf8_encode($veiculo['ar_condicionado']); ?></dd>
<hr>

<dd><i class="mdi mdi-steering"></i>Direção: <?php echo utf8_encode($veiculo['direcao_hidraulica']); ?></dd>
<hr>

<dd><i class="mdi mdi-car-door"></i> Portas: <?php echo $veiculo['portas']; ?></dd>
<hr>

<dd><i class="mdi mdi-card"></i> Vidros: <?php echo utf8_encode($veiculo['vidros']); ?></dd>
<hr>

<dd><i class="mdi mdi-lock"></i> Travas: <?php echo $veiculo['travas_eletricas']; ?></dd>
</td>

<td>

<dd><i class="mdi mdi-airbag"></i> Airbag: <?php echo utf8_encode($veiculo['airbag']); ?></dd>
<hr>

<dd><i class="mdi mdi-car-traction-control"></i> Freios: <?php echo $veiculo['freios_abs']; ?></dd>
<hr>

<dd><i class="mdi mdi-cogs"></i> Cambio: <?php echo utf8_encode($veiculo['cambio']); ?></dd>
<hr>

<dd><i class="mdi mdi-radio"></i> Radio: <?php echo $veiculo['radio']; ?></dd>
<hr>

<dd><i class="mdi mdi-arrow-expand"></i> Malas: <?php echo $veiculo['malas']; ?></dd>

</td>
</dl>
</tr>
</table>
<div>
    <div class="card">
      <div class="card-body">
        <h2 class="card-title">R$ 89,90</h2>
        <p class="card-text"></p>
        <a href="#" class="btn btn-primary btn-lg btn-block">Reservar</a>
      </div>
    </div>
  </div>
<br>
  <div class="col-md-12">
<div id="actions" class="row">

<a href="edit.php?id=<?php echo $veiculo['idveiculo'] ?>" class="btn btn-primary col-md-6"> Editar </a>
<a href="list.php" class="btn btn-default col-md-6"> Voltar </a>
</div>
</div>

</div>

</div>


</div>
</div>

<?php include(FOOTER_TEMPLATE); ?>
