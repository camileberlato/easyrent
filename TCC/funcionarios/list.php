<?php
session_start();
require_once('funcoes.php');
index();
 ?>

<?php include(HEADER_TEMPLATE); ?>
<header>
<div class="row">
<div class="col-sm-6">
<h2>Funcionários</h2>
</div>
<form class="form-inline my-2 my-lg-0">
    <input class="form-control mr-sm-2" placeholder="Pesquisar" aria-label="Pesquisar" name="filtro">
    <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Pesquisar</button>
</form>
</div>
</header>

<!-- Mensagem de alerta caso haja uma session message -->
<?php if(!Empty($_SESSION['message'])) : ?>
<div class="alert alert-<?php echo $_SESSION['type']; ?> alert-dimissible" role="alert">
<button type="button" class="close" data-dimiss="alert" aria-label="Close"><span aria-hidden="true">&times</span></button>
<?php echo $_SESSION['message']; ?>
</div>
<?php endif; ?>

<!-- Tabela com os dados dos funcionarios -->
<table class="table table-hover">
<thead>
<tr>
<th>ID</th>
<th>Nome</th>
<th>CPF</th>
<th>RG</th>
<th>Pagamento</th>
<th>Opcões</th>
</tr>
</thead>
<tbody>

<?php if($funcionario) : ?>
    <?php foreach($funcionario as $funcionario) : ?>
    <tr>
    <td> <?php echo $funcionario['idfuncionario']; ?> </td>
    <td> <?php echo utf8_encode($funcionario['nome_completo']); ?> </td>
    <td> <?php echo $funcionario['CPF']; ?> </td>
    <td> <?php echo $funcionario['RG']; ?> </td>
    <td> <?php echo $funcionario['pagamento']; ?> </td>
    <td class="actions text-right">
    <a href="view.php?id=<?php echo $funcionario['idfuncionario']?>" class="btn btn-sm btn-success"><i class="fa fa-eye"></i> Visualizar </a>
    <a href="edit.php?id=<?php echo $funcionario['idfuncionario']?>" class="btn btn-sm btn-warning"><i class="fa fa-pencil-alt"></i> Editar </a>
    <a href="#" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete-modal" data-funcionario="<?php echo $funcionario['idfuncionario']; ?>"><i class="fa fa-trash"></i> Excluir </a>
    </td>
    </tr>
    <?php endforeach; ?>
<?php else : ?>

<?php endif; ?>

</tbody>
</table>
<?php include('modal.php'); ?>

<script>

    $('#delete-modal').on('show.bs.modal', function (event){

    var button = $(event.relatedTarget);
    var id = button.data('funcionario');

    var modal = $(this);
    modal.find('.modal-title').text('Excluir Funcionario #' + id);
    modal.find('#confirm').attr('href', 'delete.php?id=' + id);
    })


</script>
<?php include(FOOTER_TEMPLATE); ?>