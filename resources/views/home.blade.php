<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Restaurante</title>
    <link rel="stylesheet" href="css/home.css">
</head>
<body>
    <header>
        <nav class="header">
           <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit">Cerrar Sesión</button>
            </form>
        </nav>
    </header>
    <main>
        <h1>Bienvenido a la Gestión del Restaurante</h1>
        <p>Utiliza el menú para acceder a los diferentes módulos.</p>
        <nav class="menu">
            <a href="{{ route('reservas') }}">Reservas</a>
            <a href="{{ route('pedidos') }}">Pedidos</a>
            <a href="{{ route('inventario') }}">Inventario</a>
        </nav>
    </main>
</body>
</html>
