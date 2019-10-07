<?php
session_start();
require_once('funcoes.php');
index();
 ?>

<?php include(HEADER_TEMPLATE); ?>
<header>
<div class="row justify-content-center">
<div class="col-md-9">

<div class="veiculos">
<h2>Veículos</h2>
</div>

<div class="filtro">
<form class="form-inline my-2 my-lg-0">
    <input class="form-control mr-sm-2" placeholder="Pesquisar" aria-label="Pesquisar">
    <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Pesquisar</button>
</form>
</div>

</div>
</div>

</header>

<!-- Mensagem de alerta caso haja uma session message -->
<?php if(!Empty($_SESSION['message'])) : ?>
<div class="alert alert-<?php echo $_SESSION['type']; ?> alert-dimissible" role="alert">
<button type="button" class="close" data-dimiss="alert" aria-label="Close"><span aria-hidden="true">&times</span></button>
<?php echo $_SESSION['message']; ?>
</div>
<?php endif; ?>

<!-- Tabela com os dados dos veiculos -->

<div class="row justify-content-center">

<div class="col-md-9">

<table class="table table-hover">
<thead style="background-color: #6896c0;">
<tr>
<th>ID</th>
<th>Nome</th>
<th>Modelo</th>
<th>Marca</th>
<th>Lançamento</th>
<th>Tipo</th>
<th>Funcionário</th>
<th>Situação</th>
<th>Opcões</th>
</tr>
</thead>
<tbody>

<?php if($veiculo) : ?>
    <?php foreach($veiculo as $veiculo) : ?>

    <!-- layout cliente -->


    <div class="card col-md-3">
        <img src="../img/mobi.jpg" class="card-img-top">
            <div class="card-body">
                <h5 class="card-title"><?php echo $veiculo['marca']; ?> <?php echo utf8_encode($veiculo['nome_veiculo']); ?></h5>
                <p class="card-text">  <?php echo $veiculo['modelo']; ?>  <?php echo $veiculo['ano_lancamento']; ?> </p>
                <a href="view.php?id=<?php echo $veiculo['idveiculo']?>" class="btn btn-primary btn-lg btn-block"> Visualizar </a>
                <a href="edit.php?id=<?php echo $veiculo['idveiculo']?>" class="btn btn-outline-secondary btn-lg btn-block"> Editar </a>
                <a href="#" class="btn btn-outline-danger btn-lg btn-block" id="btn-excluir" data-toggle="modal" data-target="#delete-modal" data-veiculo="<?php echo $veiculo['idveiculo']; ?>"> Excluir </a>
            </div>
    </div>
<br>


    <!-- layout administrador -->
    <tr>
    <td> <?php echo $veiculo['idveiculo']; ?> </td>
    <td> <?php echo utf8_encode($veiculo['nome_veiculo']); ?> </td>
    <td> <?php echo $veiculo['modelo']; ?> </td>
    <td> <?php echo $veiculo['marca']; ?> </td>
    <td> <?php echo $veiculo['ano_lancamento']; ?> </td>
    <!--Tipo Veículo-->
    <?php
    if (  $veiculo['tipo'] == 4 ){
        ?>
        <td>Econômico</td>
        <?php
    }
    ?>
    <?php
    if (  $veiculo['tipo'] == 5 ){
        ?>
        <td>Intermediário</td>
        <?php
    }
    ?>
    <?php
    if (  $veiculo['tipo'] == 6 ){
        ?>
        <td>Executivo</td>
        <?php
    }
    ?>
    <!--Funcionário-->
    <?php
    if ( $veiculo['funcionario'] == 4 ){
        ?>
        <td>Camile</td>
        <?php
    }
    ?>
    <?php
    if ( $veiculo['funcionario'] == 5 ){
        ?>
        <td>Letícia</td>
        <?php
    }
    ?>
    <?php
    if ( $veiculo['funcionario'] == 6 ){
        ?>
        <td>Angela</td>
        <?php
    }
    ?>
    <!--Situação-->
    <?php
    if ( $veiculo['situacao'] == 4 ){
        ?>
        <td>Disponível</td>
        <?php
    }
    ?>
    <?php
    if ( $veiculo['situacao'] == 5 ){
        ?>
        <td>Alugado</td>
        <?php
    }
    ?>
    <?php
    if ( $veiculo['situacao'] == 6 ){
        ?>
        <td>Manutenção</td>
        <?php
    }
    ?>

    <td class="actions text-center">
    <a href="view.php?id=<?php echo $veiculo['idveiculo']?>" class="btn btn-sm btn-success"><i class="mdi mdi-eye"></i></a>
    <a href="edit.php?id=<?php echo $veiculo['idveiculo']?>" class="btn btn-sm btn-warning"><i class="mdi mdi-account-edit"></i></a>
    <a href="#" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete-modal" data-veiculo="<?php echo $veiculo['idveiculo']; ?>"><i class="mdi mdi-delete"></i></a>
    </td>
    </tr>
    <?php endforeach; ?>
<?php else : ?>

<?php endif; ?>

</tbody>
</table>
</div>

</div>
<?php include('modal.php'); ?>

<script>
    $('#delete-modal').on('show.bs.modal', function (event){

    var button = $(event.relatedTarget);
    var id = button.data('veiculo');

    var modal = $(this);
    modal.find('.modal-title').text('Excluir Veículo #' + id);
    modal.find('#confirm').attr('href', 'delete.php?id=' + id);
    })

</script>
<?php include(FOOTER_TEMPLATE); ?>