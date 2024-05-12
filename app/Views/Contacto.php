<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <style>
        .form-container {
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1);
        }
        .form-container h2 {
            margin-top: 0;
            margin-bottom: 20px;
            text-align: center;
        }
        .form-container label {
            display: block;
            margin-bottom: 5px;
        }
        .form-container input[type="text"],
        .form-container input[type="email"],
        .form-container textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-sizing: border-box;
            margin-bottom: 10px;
        }
        .form-container input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #333;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .form-container input[type="submit"]:hover {
            background-color: #444;
        }
        .form-container .policy-checkbox {
            margin-bottom: 10px;
        }
        .form-container .policy-checkbox label {
            display: inline-block;
            margin-right: 10px;
        }
        .form-container .policy-checkbox input[type="checkbox"] {
            margin-right: 5px;
        }
        .form-container .social-media {
            margin-top: 20px;
            text-align: center;
        }
        .form-container .social-media a {
            display: inline-block;
            width: 40px;
            height: 40px;
            line-height: 40px;
            border-radius: 50%;
            background-color: #333;
            color: #fff;
            text-align: center;
            margin: 0 5px;
            text-decoration: none;
            font-size: 18px;
            transition: background-color 0.3s ease;
        }
        .form-container .social-media a:hover {
            background-color: #444;
        }    
    </style>
</head>
<body>
    <div class="form-container">
        <h2>DEJA TU MENSAJE EN EL SIGUIENTE FORMULARIO</h2>
        <form action="https://formsubmit.co/joeld214254@gmail.com" method="POST">
            <label for="name">Tu nombre (*)</label>
            <input type="text" id="name" name="name" required>
            <label for="phone">Tu teléfono (*)</label>
            <input type="text" id="phone" name="phone" required>
            <label for="message">Tu mensaje (*)</label>
            <textarea id="message" name="message" required></textarea>
            <label for="email">Tu correo electrónico (*)</label>
            <input type="email" id="email" name="email" required>
            <input type="submit" value="ENVIAR">
            
            <input type="hidden" name="_captcha" value="false">
        </form>
    </div>
</body>
</html>
