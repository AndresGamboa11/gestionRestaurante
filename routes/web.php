<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ReservaController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\InventarioController;

// Crear una ruta para la vista welcome
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// Ruta para el inicio de sesión
Route::middleware('guest')->group(function () {
    Route::get('/login', function () {
       return view('auth.login');
    })->name('login');
});
Route::post('/login', [LoginController::class, 'login'])->name('login.post');

//gestion de sesiones
Route::middleware(['web'])->group(function () {
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});

// Ruta registro
Route::get('/register', function () {
    return view('auth.register');
})->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('register.post');


// Ruta para cerrar sesión
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Crear una ruta para la vista login.blade.php
Route::get('/home', function () {
    return view('home'); // Define que la página inicial cargue la vista 'home'
})->name('home');

// ruta de reservas
Route::get('/reservas', function () {
        return view('auth.reservas');
    })->name('reservas');
    Route::post('/reservas', [ReservaController::class, 'reserva'])->name('reservas.post');

//ruta de pedidos
Route::get('/pedidos', function () {
    return view('auth.pedidos');
    })->name('pedidos');
    Route::post('/pedidos', [PedidoController::class, 'pedido'])->name('pedidos.post');
//ruta de inventario
Route::get('/inventario', function () {
    return view('auth.inventario');
    })->name('inventario');
    Route::post('/inventario', [InventarioController::class, 'inventario'])->name ('inventario.post');

