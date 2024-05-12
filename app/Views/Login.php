<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <style>
        body {
            height: 100vh;
            margin: 0;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 12px;
            padding: 20px;
            background-color:#adb5bd; 
             
        }

        label {
            margin-top: 10px;
            color: #555;
        }

        .input {
        width: 100%;
        display: flex;
        height: 40px;
        line-height: 28px;
        padding: 8px;
        padding-left: 2.5rem;
        border: 2px solid transparent;
        border-radius: 8px;
        outline: none;
        background-color: #f3f3f4;
        color: #0d0c22;
        transition: .3s ease;
        margin-bottom: 10px;
        }

        .input::placeholder {
        color: #9e9ea7;
        }

        .input:focus, input:hover {
        outline: none;
        border-color: rgba(234,76,137,0.4);
        background-color: #fff;
        box-shadow: 0 0 0 4px rgb(234 76 137 / 10%);
        }
        button {
            background-color: #007bff;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
<h1>Regístrate</h1>
    <div>
        <form method="post" action="<?php echo base_url()?>insertar">
            <label for="regnombre">Nombres:</label>
            <input type="text" name="regnombre" id="regnombre" required>

            <label for="regapellido">Apellidos:</label>
            <input type="text" name="regapellido" id="regapellido" required>

            <label for="regusuario">Usuario:</label>
            <input type="text" name="regusuario" id="regusuario" required>

            <label for="regcontraseña">Contraseña:</label>
            <input type="password" name="regcontraseña" id="regcontraseña" required>
            
            <input type="checkbox" id="cbx" onclick="mostrarOcultarContraseña()">
            <label class="check" for="cbx">Mostrar Contraseña</label>
            <hr>
            <button class="btn btn-outline-primary" type="submit"><a href="<?php base_url();?>log"></a>CREAR CUENTA</button>
        </form>
    </div>

    <script>
    function mostrarOcultarContraseña() {
        var contraseñaInput = document.getElementById("regcontraseña");
        if (contraseñaInput.type === "password") {
            contraseñaInput.type = "text";
        } else {
            contraseñaInput.type = "password";
        }
    }
    </script>

</body>
</html>
