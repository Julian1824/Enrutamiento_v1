<?php include "Model/conexion.php";?>
<header>
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
            aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
            aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner" style="height:150px ">
        <div class="carousel-item active" style="height:150px;">
            <img src="./public/assets/banner_1.png" alt="">
            <div class="carousel-caption">

            </div>
        </div>
        <div class="carousel-item" style="height:150px;">
            <img src="./public/assets/banner_2.png">
            <div class="carousel-caption">

            </div>
        </div>
        <div class="carousel-item" style="height:150px;">
            <img src="./public/assets/banner_3.png" alt="">
            <div class="carousel-caption">

            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
        data-bs-slide="prev">
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
    data-bs-slide="next">
    <span class="visually-hidden">Next</span>
</button>
</div>
</header>

<div style="margin-top:15px">
<center>
    <button type="button" class="btn btn-warning" data-bs-toggle="modal"
        data-bs-target="#modal_directorio">Directorio EPM</button>
    <button type="button" class="btn btn-warning" data-bs-toggle="modal"
        data-bs-target="#modal_oficinas">Oficinas</button>
    <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modal_teguio">Te
        guio</button>
</center>
</div>

<div style="margin-top:15px">
<center>
    <button type="button" class="btn btn-success" data-bs-toggle="modal"
        data-bs-target="#modal_orientacion_factura">Orientaci??n a la factura</button>
    <button type="button" class="btn btn-success" data-bs-toggle="modal"
        data-bs-target="#modal_da??os_acueducto">Da??os acueducto</button>
    <button type="button" class="btn btn-success" data-bs-toggle="modal"
        data-bs-target="#modal_da??os_energia">Da??os energ??a</button>
    <button type="button" class="btn btn-success" data-bs-toggle="modal"
        data-bs-target="#modal_SOMOS">SOMOS</button>
    <button type="button" class="btn btn-success" data-bs-toggle="modal"
        data-bs-target="#modal_SOLGAS">SOLGAS</button>
    <button type="button" class="btn btn-success" data-bs-toggle="modal"
        data-bs-target="#modal_EPM_a_tu_puerta">EPM a tu Puerta</button>
    <button type="button" class="btn btn-success" data-bs-toggle="modal"
        data-bs-target="#modal_revisiones_periodicas">Revisiones Peri??dicas</button>
    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modal_da??os_gas">Da??os
        gas</button>
    <button type="button" class="btn btn-success" data-bs-toggle="modal"
        data-bs-target="#modal_linea_empresarial">Linea empresarial</button>
    <button type="button" class="btn btn-success" data-bs-toggle="modal"
        data-bs-target="#modal_quejas">Quejas</button>
</center>
</div>
