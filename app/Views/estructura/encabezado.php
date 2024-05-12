<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      color: #adb5bd;
    }

    nav {
      background-color: #343a40; 
    }

    .navbar-brand, .navbar-nav a {
      color: #adb5bd; 
      text-decoration: none;
      padding: 10px;
      margin: 0 10px;
    }

    .navbar-toggler {
      background-color: #0d6efd; 
    }

    .navbar-toggler-icon {
      color: #343a40; 
    }

    .button {
      background-color: #ffffff00;
      color: #000;
      width: 8.5em;
      height: 2.9em;
      border: #3654ff 0.2em solid;
      border-radius: 11px;
      text-align: right;
      transition: all 0.6s ease;
    }
    .button:hover {
      background-color: #3654ff;
      cursor: pointer;
    }

    .button svg {
      width: 1.6em;
      margin: -0.2em 0.8em 1em;
      position: absolute;
      display: flex;
      transition: all 0.6s ease;
    }

    .button:hover svg {
      transform: translateX(5px);
    }

    .text {
      margin: 0 1.5em
    }
  </style>
</head>
<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="<?= base_url('/');?>">Inicio</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link" href="<?php base_url();?>noso">Nosotros</a>
          <a class="nav-link" href="<?php base_url();?>prod">Productos</a>
          <a class="nav-link" href="<?php base_url();?>conta">Contacto</a>
        </div>
      </div>
    </div>
    <button class="button"><a class="nav-link" href="<?php base_url();?>log">Login</a></button>
  </nav>
</body>
</html>

