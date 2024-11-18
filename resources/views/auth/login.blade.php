<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión</title>
    <link rel="stylesheet" href="{{ asset('css/estilosLogin.css') }}">
    <style>
        body{
            margin: 0; /* Elimina márgenes por defecto */

        }
        .caja{
            display: grid; /* Activa el modo de grid */
            place-items: center; /* Centra el contenido horizontal y verticalmente */
            min-height: 100vh; /* Asegura que el body tenga al menos la altura completa de la pantalla */
            background-color: #f0f0f0; /* Color de fondo opcional */
            background-image: url('img/2.jpg'); 
            background-size: cover; /* Ajusta la imagen a la altura del body */
            background-position: center; /* Centra la imagen */
            
        }

        header{
            display: flex; /* Activa el modo flexbox */
            justify-content: flex-end; /* Alinea horizontalmente el contenido a la derecha */
            align-items: center; /* Centra verticalmente el contenido dentro del header */
            height: 70px;
            background: rgb(11, 2, 56); /* Aumenta la opacidad al pasar el cursor */
            color: #00f2fe;
        }
        header:hover {
            background: rgba(0, 0, 0, 0.8); /* Aumenta la opacidad al pasar el cursor */
            color: #00f2fe;
        }

        a{
            padding-right: 20px;
            text-decoration: none; /* Elimina el subrayado del enlace */
            color:#00f2fe ;
            font-size: 27px;
        }
        a:hover {
            color: violet; /* Aumenta la opacidad al pasar el cursor */
            text-shadow: 0 0 10px #e0e0ff, 0 0 20px #e0e0ff, 0 0 30px #e0e0ff, 0 0 40px violet, 0 0 70px violet;
            
        }
        .titulo {
            margin-right: 67%;
            padding: 10px 20px;
            border: 2px solid #6a5acd;
            font-size: 2em;
            color: #6a5acd; /* Color base */
            border-radius: 50%;
            text-align: center;
            background: linear-gradient(135deg, #4facfe, #00f2fe, #6a5acd);
            background-clip: text;
            -webkit-background-clip: text;
            color: transparent;
            position: relative;
            transition: color 0.3s ease;
            cursor: pointer;
            text-shadow: 0 0 10px #6a5acd, 0 0 20px #6a5acd, 0 0 30px #6a5acd;
        }
        form{
            width: 300px;
            height: 350px;
            margin-top: 30px;
            border: 2px solid #007BFF; /* Borde de 2px de grosor y color azul */
            border-radius: 0px 28px 0px 8px; /* Bordes redondeados */
            padding: 20px; /* Espacio interno del formulario */
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.3); /* Sombra para resaltar */
            background-color: rgba(128, 128, 128, 0.7); /* Fondo gris con 80% de opacidad */
        }

        h2{
            text-align: center;
            
        }

        input{
            width: 300px;
            height: 30px;
            margin-top: 10px;
        }
        button{
            width: 200px;
            height: 40px;
            background-color: #007BFF;
            align-items: center;
            margin: 40px;
            text-wrap:wrap;
            font-size: 25px;
            color: white;
            

        }

        .error {
            text-align: center;
            color: red;
            font-weight: bold;
            font-size: 0.9em;
        }
        .imgcaja {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 60px;
        }

        .imgcaja img {
            width: 150px; /* Ajusta el tamaño de la imagen */
            height: 150px; /* Asegura proporciones iguales para la forma circular */
            border-radius: 50%; /* Hace que la imagen sea circular */
            object-fit: cover; /* Ajusta la imagen para que llene el contenedor sin distorsión */
            border: 3px solid #007BFF; /* Borde opcional */
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5); /* Sombra para resaltar */
        }
        label{
            font-size: 30px;
            font-weight: 600;
            font-family: Arial, Helvetica, sans-serif;

            
        }
        h2{
            text-align: center;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 30px;
            margin-bottom: 30px;
            color: #3d3b3b;

        }
    </style>
</head>
<body>

    <header>
        <h1 class="titulo">Proyecto</a></h1>
        <a href="{{ route('welcome') }}">Inicio</a>
        <a href="{{ route('register') }}">Registrar</a>
    </header>
   
    <div class="caja">
    <div class="imgcaja">
        <img src="/img/1.gif" alt="img">
    </div>
        <form method="post">
            @csrf
            <h2>Inicio de Sesión</h2>
    
            @if(session('error'))
                <p class="error">{{ session('error') }}</p>
            @endif
            @if(session('error'))
                <p class="error">{{ session('error') }}</p>
            @endif
    
            <label for="email">*Email:</label>
            <input type="email" name="email" id="email" >
            @error('email') 
                <p class="error">{{ $message }}</p>
            @enderror
    
            <label for="password">*Contraseña:</label>
            <input type="password" name="password" id="password" >
            @error('password')
                <p class="error">{{ $message }}</p>
            @enderror
    
            <button type="submit">Iniciar Sesión</button>
        </form>
    </div>
</body>
</html>