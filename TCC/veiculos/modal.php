<?php 
require_once('funcoes.php');
delete();
?>
<div class="modal fade" id="delete-modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title" id="modalLabel"> Excluir Item</h4>
<a  href="list.php"><button type="button" class="close" data-dimiss="modal" aria-label="Fechar"><span aria-hidden="true">&times;</span></button></a>
</div>
<div class="modal-body">
Deseja realmente excluir este item?
</div>
<div class="modal-footer">
<a id="confirm" class="btn btn-primary" href="#">Sim</a>
<a  href="list.php" id="cancel" class="btn btn-deault" data-dimiss="modal">N&atilde;o</a>
</div>
</div>
</div>
</div>