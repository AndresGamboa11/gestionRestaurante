<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Inventarios</title>
    <link rel="stylesheet" href="css/home.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="{{ route('reservas') }}">Reservas</a></li>
                <li><a href="{{ route('pedidos') }}">Pedidos</a></li>
                <li><a href="{{ route('inventario') }}">Inventario</a></li>
                <li>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit">Cerrar Sesión</button>
                    </form>
                </li>
            </ul>
        </nav>
    </header>
    <main>
        <h1>Bienvenido a la Gestión de Inventario</h1>
        <p>Utiliza el menú para acceder a los diferentes módulos.</p>
    </main>
</body>
</html>
