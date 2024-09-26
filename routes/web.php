<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GrassController;
use App\Http\Controllers\UsuarioController;

Route::get('/GrassController', [\App\Http\Controllers\GrassController::class, '__construct']);
$host = 'localhost';
$user = 'usuario';
$password = 'senha';
$dbname = 'nome_do_banco';

$connection = mysqli_connect($host, $user, $password, $dbname);

if (!$connection) {
    die("Erro: " . mysqli_connect_error());
}

$grassController = new GrassController($connection);


Route::post('/register', [UsuarioController::class, 'createUser']);
$usuarioController->createUser('usuario', 'senha', 'email@example.com');

Route::post('/login', [UsuarioController::class, 'login']);
$loginStatus = $usuarioController->login('usuario', 'senha');
if ($loginStatus) {
    echo "Bem vindo";
} else {
    echo "Falha no login";
}

Route::post('/logout', [UsuarioController::class, 'logout']);
$usuarioController->logout();
echo "Você saiu com sucesso!";

