<?php

namespace App\Controllers;

use App\Models\insert;

class Home extends BaseController
{
    
    public function inicio() {
        echo view('estructura/encabezado');
        echo view('Inicio');
        echo view('estructura/piedepagina');
    }

    public function nosotros() {
        echo view('estructura/encabezado');
        echo view('Nosotros');
        echo view('estructura/piedepagina');
    }

    public function productos() {
        echo view('estructura/encabezado');
        echo view('Productos');
        echo view('estructura/piedepagina');
    }

    public function contacto() {
        echo view('estructura/encabezado');
        echo view('Contacto');
        echo view('estructura/piedepagina');
    }

    public function login() {
        echo view('estructura/encabezado');
        echo view('Login');
        echo view('estructura/piedepagina');
    }

    public function conect() {
        // Cargar la configuración de la base de datos
        $db = \Config\Database::connect();
        // Comprobar la conexión
        if ($db->connect()) {
            echo 'Conexión a la base de datos exitosa.';
        } else {
            echo 'Error al intentar conectar a la base de datos.';
        }
    }

    public function insertreg() {
        $datos = [
            "reg_nombre" => $_POST['regnombre'],
            "reg_apellido" => $_POST['regapellido'], 
            "reg_usuario" => $_POST['regusuario'],
            "reg_contraseña" => $_POST['regcontraseña']
        ];
        $instancia = new insert();
        //echo view('estructura/encabezado');
        //return view("RegistroE");
        //echo view('estructura/piedepagina');
        print_r($instancia->insertregistro($datos));    
    }
}

