<?php 

$tituloPagina = 'Home';

include_once './includes/_head.php';
include_once './includes/_header.php';
include_once './includes/_opcoes.php';
include_once './includes/_dados.php';
?>


<main>
    <div class="col-12">
        <img id="banner2" src="./imgs/banner2.jpg">
    </div>
<div class="col-12">
    <div id="containercarousel" class="container">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="./imgs/bannerahri.webp" alt="Primeiro Slide">
            </div>
            <div class="carousel-item">
            <img src="./imgs/bannerahri.webp" alt="Segundo Slide">
            </div>
            <div class="carousel-item">
            <img src="./imgs/bannerahri.webp" alt="Terceiro Slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Próximo</span>
        </a>
        </div>
    </div>
    </div>
    <div id="colbanner" class="col-12">
    <img id="banner" src="./imgs/banner.jpg">
    </div>
    <div class="col-12" id="categorias">
        <?php 
        
            for ($i=0; $i <= 5; $i++) { ?>
                <a href="produto-detalhe.php?id=<?php echo $i;?>">
                    <input id="botaoemoji" type="image" src="./imgs/emoji.png">
                    
                    
                </a>
            <?php
                }
            ?>
        
        
    </div>
    
</main>
<?php //echo date("Ymd"), rand(0, 9999);  ?>