
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuario</title>
    <link rel="stylesheet" href="{{ asset('css/estilosRegistro.css') }}">
    <style>
        body{
            margin: 0;
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
            margin-right: 65%;
            padding: 10px 20px;
            font-family: Arial, Helvetica, sans-serif;
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
        label{
            font-size: 25px;
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

        .exito{
            text-align: center;
            color: green;
            font-weight: bold;
        }

        input{
            width: 300px;
            height: 30px;
            margin-top: 10px;
        }

        .error {
            color: red;
            font-size: 0.9em;
        }
        .container {
            font-size: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 10px;
            width: 100%;
            padding-bottom: 10px;
        }
        form{
            width: 300px;
            height: 450px;
            margin-top: -40px;
            border: 2px solid #007BFF; /* Borde de 2px de grosor y color azul */
            border-radius: 0px 28px 0px 8px; /* Bordes redondeados */
            padding: 20px; /* Espacio interno del formulario */
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.3); /* Sombra para resaltar */
            background-color: rgba(128, 128, 128, 0.7); /* Fondo gris con 80% de opacidad */
        }
        /*caja*/
        button{
            width: 200px;
            height: 40px;
            background-color: #007BFF;
            align-items: center;
            margin: 40px;
            text-wrap:wrap;
            font-size: 32px;
            color: white;

        }

    </style>
</head>
<body>
    <header>
        <h1 class="titulo">Proyecto</a></h1>
        <a href="{{ route('welcome') }}">inicio</a>
        <a href="{{ route('login') }}">login</a>
    </header>

    <div class="caja">
        <form action="{{ route('register.post') }}" method="POST">
            @csrf <!-- Esto genera el token CSRF necesario -->
            <h2>Registro de Usuario</h2>
    
            @if(session('success'))
                <p class="exito">{{ session('success') }}</p>
            @endif
            @if(session('error'))
                <p class="error">{{ session('error') }}</p>
            @endif
    
            <label for="name">Nombre:</label>
            <input type="text" name="name" id="name"  required>
            @error('name')
                <p class="error">{{ $message }}</p>
            @enderror
    
            <label for="email">Email:</label>
            <input type="email" name="email" id="email"  required>
            @error('email')
                <p class="error">{{ $message }}</p>
            @enderror
    
            <label for="password">Contraseña:</label>
            <input type="password" name="password" id="password" required>
            @error('password')
                <p class="error">{{ $message }}</p>
            @enderror

    
            <button type="submit">Registrar</button>
        </form>
    </div>
    
</body>
</html>