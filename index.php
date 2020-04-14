<?php
require './Classes/OpenWheatherApi.php';
$openWheater = new OpenWheatherApi();
$clima = $openWheater->getClima();
?>

<!-- Coloque seu HTML aqui -->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">

        <style>
            .carousel-inner img {
                width: 100%;
                height:400px;
                background-size: center;
            }     
        </style>
    </head>
    <body>
        <header>
            <!--Cabeçalho-->
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <a class="navbar-brand" href="#">Cabeçalho lg</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarsExample05">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Casa <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Endereço</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Desabilitado</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Supender</a>
                            <div class="dropdown-menu" aria-labelledby="dropdown05">
                                <a class="dropdown-item" href="#">Ação</a>
                                <a class="dropdown-item" href="#">Outra Ação</a>
                                <a class="dropdown-item" href="#">Algo mais aqui</a>
                            </div>
                        </li>
                    </ul>
                    <form class="form-inline my-2 my-md-0">
                        <input class="form-control" type="text" placeholder="Procurar">
                    </form>
                </div>
            </nav>
        </header>

        <!-- Primeira Parte: Parte que difine os Baners -->

        <main role="main">

            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="img/barDoMe2.jpg" alt="Primeiro Slide">
                        <div class="carousel-caption d-none d-md-block text-left">
                            <h5><?php echo $clima->cidade; ?>: <?php echo $clima->getTemperaturaCelsius(); ?> ºC</h5>
                            <p>Humidade do Ar: <?php echo $clima->humidade; ?>%</p>
                            <p>Id: <?php echo $clima->codCidade; ?></p>
                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="img/sinuca.jpg" alt="Segundo Slide">
                        <div class="carousel-caption d-none d-md-block text-left">
                            <h5><?php echo $clima->cidade; ?>: <?php echo $clima->getTemperaturaFahrenheit(); ?> ºF</h5>
                            <p>Velocidade do Vento: <?php echo $clima->getVelocidadeVento(); ?> Km/h</p>
                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="img/barDoMe1.jpg" alt="Segundo Slide">
                        <div class="carousel-caption d-none d-md-block text-left">
                            <h5><?php echo $clima->cidade; ?>: <?php echo $clima->getTemperaturaCelsius(); ?> ºC</h5>
                            <p>Nascer do Sol: <?php echo date('d/m/Y H:i', ($clima->nascerDoSol) - (10783)); ?></p>
                            <p>Pôr do Sol: <?php echo date('d/m/Y H:i', ($clima->porDoSol) - (10783)); ?></p>
                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="img/domino2.jpg" alt="Terceiro Slide">
                        <div class="carousel-caption d-none d-md-block text-left">
                            <h5><?php echo $clima->cidade; ?>: <?php echo $clima->getTemperaturaFahrenheit(); ?> ºF</h5>
                            <p>Pressão Atmosférica: <?php echo $clima->pressao; ?> hPa</p>
                            <p>Descrição: <?php echo $clima->descricao; ?></p>
                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Anterior</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Próximo</span>
                </a>

            </div>

        </div>
    </div>
</div>
<br></br>

<div class="container marketing">

    <!-- Segunda Parte: Três colunas de texto, três círculos abaixo dos Banners -->
    <div class="row">
        <div class="col-lg-4 text-center">
            <img class="rounded-circle" src="https://static.carrefour.com.br/medias/sys_master/images/images/h57/h1b/h00/h00/13247489048606.jpg" alt="Generic placeholder image" width="140" height="140">
            <h2>R$ 10,00</h2>
            <p>HEINEKEN garrafa 600ml</p>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4 text-center">
            <img class="rounded-circle" src="https://cotabest.s3.amazonaws.com/media/sku/cerveja-garrafa-retornavel-600ml-brahma-un.png" alt="Generic placeholder image" width="140" height="140">
            <h2>R$ 7,50</h2>
            <p>BRAHMA garrafa 600ml</p>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4 text-center">
            <img class="rounded-circle" src="https://images.squarespace-cdn.com/content/v1/51ef2bf2e4b02bcf8471333b/1430627802136-YJ7WEGZD7HIQML7DFRIL/ke17ZwdGBToddI8pDm48kLxnK526YWAH1qleWz-y7AFZw-zPPgdn4jUwVcJE1ZvWEtT5uBSRWt4vQZAgTJucoTqqXjS3CfNDSuuf31e0tVH33scGBZjC30S7EYewNF5iKKwhonf2ThqWWOBkLKnojuqYeU1KwPvsAK7Tx5ND4WE/Schin" alt="Generic placeholder image" width="140" height="140">
            <h2>R$ 5,00</h2>
            <p>SCHIN garrafa 600ml</p>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->            
</div>
<br></br>

<!--Terceira parte: referente à preços -->
<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    <h1 class="display-4">Preços</h1>
    <p class="lead">Construa uma tabela de preços para seus potenciais clientes, com esse exemplo Bootstrap. Além do mais, é feito com componentes padrões, utilitários e um pouquinho de customização.</p>
</div>

<div class="container">
    <div class="card-deck mb-3 text-center">
        <div class="card mb-4 shadow-sm">
            <div class="card-header">
                <h4 class="my-0 font-weight-normal">Guaraná Antártica</h4>
            </div>
            <div class="card-body">
                <h1 class="card-title pricing-card-title">R$ 3,00<small class="text-muted"></small></h1>
                <ul class="list-unstyled mt-3 mb-4">
                    <li>lata de 300ml</li>

                </ul>
                <button type="button" class="btn btn-lg btn-block btn-outline-primary">Cadastre-se de graça</button>
            </div>
        </div>
        <div class="card mb-4 shadow-sm">
            <div class="card-header">
                <h4 class="my-0 font-weight-normal">Coca-Cola</h4>
            </div>
            <div class="card-body">
                <h1 class="card-title pricing-card-title">R$ 3,00 <small class="text-muted"></small></h1>
                <ul class="list-unstyled mt-3 mb-4">
                    <li>lata de 300ml</li>

                </ul>
                <button type="button" class="btn btn-lg btn-block btn-primary">Conhecer</button>
            </div>
        </div>
        <div class="card mb-4 shadow-sm">
            <div class="card-header">
                <h4 class="my-0 font-weight-normal">Guaraná FYs (Heineken)</h4>
            </div>
            <div class="card-body">
                <h1 class="card-title pricing-card-title">R$ 3,00 <small class="text-muted"></small></h1>
                <ul class="list-unstyled mt-3 mb-4">
                    <li>lata 350ml</li>

                </ul>
                <button type="button" class="btn btn-lg btn-block btn-primary">Contate-nos</button>
            </div>
        </div>
    </div>
    <br>

    <!--Quarta parte: Texto do lado esquerdo e imagem do lado direito -->
    <hr class="featurette-divider">

    <div class="row featurette">
        <div class="col-md-7">
            <h2 class="featurette-heading">Primeiro título de featurezinhas. <span class="text-muted">Supreendente, não?!</span></h2>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" src="img/barDoMe5.jpg" alt="Generic placeholder image">
        </div>
    </div>
    <br>
    <br>

    <!-- Quinta parte: Texto do lado direito e imagem do lado esquerdo -->
    <hr class="featurette-divider">

    <div class="row featurette">
        <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading">Aêêê, moleque! <span class="text-muted">Tá legal ou não tá?</span></h2>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        <div class="col-md-5 order-md-1">
            <img class="featurette-image img-fluid mx-auto" src="img/barDoMe6.jpg" alt="Generic placeholder image">
        </div>
    </div>
</div>

<hr class="featurette-divider">


</main>
<!--rodapé-->
<footer  class="blog-footer text-center">
    <p>Template de blog construído para o <a href="https://pt-br.facebook.com/fernandobaron01">Fernando Baron</a>, pelo <a href="https://cursos.sesisenai.org.br/brusque">SENAI/BRUSQUE</a>.</p>
    <p>
        <a href="#">Voltar ao Cabeçalho</a>
    </p>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script src="js/bootstrap.min.js" type="text/javascript">
</script>

<script src="js/bootstrap.bundle.min.js" type="text/javascript">
</script>
</body>
</html>