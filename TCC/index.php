<?php
     require_once('config.php');
     require_once(DBAPI);
     $db = open_database();
     include(HEADER_TEMPLATE);
?>
<?php  if($db) : ?>
</div>

<!--Carrosel-->
<div class="row justify-content-center">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/thumbnail_IMG_0535.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="img/2.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="img/3.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <!-- jumbotron -->
<div class="jumbotron">
<h1>Encontre sua categoria ideal!</h1>
            <hr>
            <p class="lead">Modelos a partir de 89,90/diária.</p>
            <a class="btn btn-primary btn-lg" href="#" role="button">Saiba mais</a>
        </div>
       <?php else : ?>
    <div class="alert alert-danger" role="alert">
        <p><strong>ERRO:</strong> Não foi possível Conectar ao Banco de Dados</p>
    </div>
    </div>

<?php endif; ?>
    <!--Recomendados-->
    <div class="row justify-content-center">
        <h3>Recomendados:</h3>
    </div>
    <div class="d-flex justify-content-center">
        <div class="card" style="width: 18rem; margin: 1%;">
            <img src="img/carros/mobi.jpg" class="card-img-top">
            <hr>
            <div class="card-body">
                <h5 class="card-title">Econômico Plus</h5>
                <p class="card-text">Onix 1.0 ou similar.</p>
                <button type="button" class="btn btn-primary btn-lg btn-block">Saiba mais</button>
            </div>
        </div>

        <div class="card" style="width: 18rem; margin: 1%;">
            <img src="img/carros/mobi.jpg" class="card-img-top">
            <hr>
            <div class="card-body">
                <h5 class="card-title">Executivo Blindado</h5>
                <p class="card-text">Audi A4 ou similar.</p>
                <button type="button" class="btn btn-primary btn-lg btn-block">Saiba mais</button>
            </div>
        </div>

        <div class="card" style="width: 18rem; margin: 1%;">
            <img src="img/carros/mobi.jpg" class="card-img-top">
            <hr>
            <div class="card-body">
                <h5 class="card-title">Prime</h5>
                <p class="card-text">Volvo XC60 ou similar.</p>
                <button type="button" class="btn btn-primary btn-lg btn-block">Saiba mais</button>
            </div>
        </div>

        <div class="card" style="width: 18rem; margin: 1%;">
            <img src="img/carros/mobi.jpg" class="card-img-top">
            <hr>
            <div class="card-body">
                <h5 class="card-title">Itermediário Automático</h5>
                <p class="card-text">Hb20s ou similar.</p>
                <button type="button" class="btn btn-primary btn-lg btn-block">Saiba mais</button>
            </div>
        </div>
    </div>

<?php include(FOOTER_TEMPLATE); ?>