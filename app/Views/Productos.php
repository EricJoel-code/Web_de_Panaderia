<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
    <style>
        .boton {
        width: 9em;
        height: 3em;
        border-radius: 30em;
        font-size: 15px;
        font-family: inherit;
        border: none;
        position: relative;
        overflow: hidden;
        z-index: 1;
        box-shadow: 6px 6px 12px #c5c5c5,
                    -6px -6px 12px #ffffff;
        }

        .boton::before {
        content: '';
        width: 0;
        height: 3em;
        border-radius: 30em;
        position: absolute;
        top: 0;
        left: 0;
        background-image: linear-gradient(to right, #0fd850 0%, #f9f047 100%);
        transition: .5s ease;
        display: block;
        z-index: -1;
        }

        .boton:hover::before {
        width: 9em;
        }
    </style>
</head>
<body>
<div class="container text-center my-5">
    <h4>Productos</h4>
    <div class="d-flex flex-wrap">
        <div class="card m-2" style="width: 18rem;">
            <img src="https://www.supermercadosantamaria.com/documents/10180/10504/3000020_G.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">Pan Cacho</p>
            </div>
        </div>
        
        <div class="card m-2" style="width: 18rem;">
            <img src="https://www.supermercadosantamaria.com/documents/10180/10504/3000037_G.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">Pan de Chocolate</p>
            </div>
        </div>
        
        <div class="card m-2" style="width: 18rem;">
            <img src="https://soria.e-leclerc.es/documents/10180/10815/9400002549612_G.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">Pan Integral</p>
            </div>
        </div>
        <div class="card m-2" style="width: 18rem;">
            <img src="https://erick.com.ec/wp-content/uploads/2021/10/y1.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">Pan de Dulce</p>
            </div>
        </div>
        <div class="card m-2" style="width: 18rem;">
            <img src="https://erick.com.ec/wp-content/uploads/2021/10/3324.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">Pan Mixto</p>
            </div>
        </div>
        <div class="card m-2" style="width: 18rem;">
            <img src="https://erick.com.ec/wp-content/uploads/2021/10/n2.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">Pan Integral de Dulce</p>
            </div>
        </div>
        <div class="card m-2" style="width: 18rem;">
            <img src="https://california.ec/wp-content/uploads/2023/05/Enroule.png" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">Pan Enrollado</p>
            </div>
        </div>
        <div class="card m-2" style="width: 18rem;">
            <img src="https://erick.com.ec/wp-content/uploads/2021/10/4144.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">Bizcocho</p>
            </div>
        </div>
        <div class="card m-2" style="width: 18rem;">
            <img src="https://erick.com.ec/wp-content/uploads/2021/10/2-3.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">Enpanada de Queso</p>
            </div>
        </div>
        <div class="card m-2" style="width: 18rem;">
            <img src="https://www.verybestbaking.com/sites/g/files/jgfbjl326/files/srh_recipes/6ac66e5882a6c7672cec34554a5a3a2d.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">Pastel de Chocolate</p>
            </div>
        </div>
        <div class="card m-2" style="width: 18rem;">
            <img src="https://angelinasdelivery.com/wp-content/uploads/2020/07/Angelinas-Galletas-Melvas-2.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">Melvas</p>
            </div>
        </div>
        <div class="card m-2" style="width: 18rem;">
            <img src="https://www.dulcerialapalma.com.ec/wp-content/uploads/2020/09/LaPalma-47.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">Aplanchados</p>
            </div>
        </div>
    </div>
    <button class="boton"><a class="link-offset-2 link-underline link-underline-opacity-0" href="<?php base_url();?>log">Ver Mas Detalles de Productos</a></button>
    </div>
</body>
</html>