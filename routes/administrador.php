<?php

use Illuminate\Support\Facades\Route;
//USAR EL USERCONTROLLER
use App\Http\Controllers\Administrador\UserController;
//Rutas para la funcionalidad de la gestion de usuarios
Route::resource('users' ,Usercontroller::class)->names('administrador.users');
