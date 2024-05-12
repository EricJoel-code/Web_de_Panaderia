<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <style>
        .botonver {
        --color: #560bad;
        font-family: inherit;
        display: inline-block;
        width: 8em;
        height: 2.6em;
        line-height: 2.5em;
        margin: 20px;
        position: relative;
        overflow: hidden;
        border: 2px solid var(--color);
        transition: color .5s;
        z-index: 1;
        font-size: 17px;
        border-radius: 6px;
        font-weight: 500;
        color: var(--color);
        }

        .botonver:before {
        content: "";
        position: absolute;
        z-index: -1;
        background: var(--color);
        height: 150px;
        width: 200px;
        border-radius: 50%;
        }

        .botonver:hover {
        color: #fff;
        }

        .botonver:before {
        top: 100%;
        left: 100%;
        transition: all .7s;
        }

        .botonver:hover:before {
        top: -30px;
        left: -30px;
        }

        .botonver:active:before {
        background: #3a0ca3;
        transition: background 0s;
        }
    </style>
</head>
<body>
<div id="carouselExampleFade" class="carousel slide carousel-fade">
    <div class="carousel-inner" style="max-height: 600px;">
        <div class="carousel-item active">
            <img src="https://img.freepik.com/foto-gratis/variedad-productos-horneados-dulce-indulgencia-generada-ia_188544-23071.jpg?w=826&t=st=1706727415~exp=1706728015~hmac=0b8dae2978b8384e7df5358a21a4473d56c4cbe919d65af505363cef35339bec" class="d-block w-100 img-fluid" alt="...">
        </div>
        <div class="carousel-item">
            <img src="https://img.freepik.com/fotos-premium/panaderia-tienda-pan-cafe-venta-gente-alemana-viajeros-extranjeros-plaza-mercado-heidelberger-o-marktplatz-25-agosto-2017-heidelberg-alemania_258052-55.jpg?w=740" class="d-block w-100 img-fluid" alt="...">
        </div>
        <div class="carousel-item">
            <img src="https://img.freepik.com/foto-gratis/vista-deliciosos-dulces-postres-magdalenas-glaseado_23-2150679644.jpg?w=826&t=st=1706727528~exp=1706728128~hmac=37fdb9672ab7ed30297986b2bdcb61d5730602391cd5d064a20f32bed2899eb3" class="d-block w-100 img-fluid" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
         </button>
    </div>
    <br>
    <br>
    <!--Que nos diferencia -->
    <div class="container text-center">
    <h4>¿Qué Nos Diferencia?</h4>
    <hr>
        <div class="row">
            <div class="col">
                <h2>INNOVACIÓN</h2>
                <img src="https://images.vexels.com/media/users/3/203677/isolated/lists/cedd3ca0baf64efb172bc686715aa9b8-icono-de-calavera-de-pan.png" alt="">
                <p>Apostamos por la innovación y el desarrollo de nuevos productos, diferenciales, que destaquen tanto por su sabor y calidad como por su fórmula innovadora. También trabajamos en descubrir productos funcionales que nos ayuden.</p>
            </div>
            <div class="col">
                <h2>PERSONALIZACIÓN</h2>
                <img src="https://images.vexels.com/media/users/3/147258/isolated/lists/94d9552b2335c383efbdbae9556d3289-dibujos-animados-de-pastel-de-cumpleanos-de-dos-pisos.png" alt="">
                <p>En nuestros establecimientos personalizamos cualquier tipo de dulce, sobre todo nuestras tartas, en las que incluimos nombres, fotos, objetos de chocolate y todo lo que quieras.</p>
            </div>
            <div class="col">
                <h2>PEDIDOS A DOMICILIO</h2>
                <img src="https://i0.wp.com/www.granmurallacordoba.es/wp-content/uploads/2022/12/pedidos-domicilio.png?fit=256%2C256&ssl=1" alt="">
                <p>Ofrecemos un servicio rápido y seguro para el transporte de nuestros productos al lugar que usted desee. Además, de disponer de un servicio a domicilio para llevarte el pan a casa, también comercializamos nuestros productos por el resto.</p>
            </div>
        </div>
    </div>

<!--Productos -->
    <div class="container text-center my-5">
    <h4>Productos destacados</h4>
    <hr>
    <h2>Descubre la excelencia en nuestros panes</h2>
    
    <div class="d-flex flex-wrap">
        <div class="card m-2" style="width: 18rem;">
            <img src="https://www.supermercadosantamaria.com/documents/10180/10504/3000020_G.jpg" class="card-img-top" alt="...">
            <hr>
            <div class="card-body">
                <p class="card-text">Pan Cacho</p>
            </div>
        </div>
        
        <div class="card m-2" style="width: 18rem;">
            <img src="https://www.supermercadosantamaria.com/documents/10180/10504/3000037_G.jpg" class="card-img-top" alt="...">
            <hr>
            <div class="card-body">
                <p class="card-text">Pan de Chocolate</p>
            </div>
        </div>
        
        <div class="card m-2" style="width: 18rem;">
            <img src="https://soria.e-leclerc.es/documents/10180/10815/9400002549612_G.jpg" class="card-img-top" alt="...">
            <hr>
            <div class="card-body">
                <p class="card-text">Pan Integral</p>
            </div>
        </div>
    </div>
    <button class="botonver"><a class="link-offset-2 link-underline link-underline-opacity-0" href="<?php base_url();?>prod">Ver Mas</a></button>
    </div>
</body>
</html>