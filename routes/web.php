<?php

use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// // Afficher la liste des utilisateurs
// Route::get('/users', [UserController::class, 'index'])
//     ->name('users.index');
// // Afficher le formulaire de création d'un utilisateur
// Route::get('/users/create', [UserController::class, 'create'])
//     ->name('users.create');
// // Récupérer le formulaire et créer l'utilisateur en BDD
// Route::post('/users', [UserController::class, 'store'])
//     ->name('users.store');
// // Afficher l'utilisateur portant l'id {user}
// Route::get('/users/{user}', [UserController::class, 'show'])
//     ->name('users.show');
// // Afficher le formulaire de modification de l'utilisateur portant l'id {user}
// Route::get('/users/{user}/edit', [UserController::class, 'edit'])
//     ->name('users.edit');
// // Récupérer le formulaire et modifier en BDD l'utilisateur portant l'id {user}
// Route::patch('/users/{user}', [UserController::class, 'update'])
//     ->name('users.update');
// // Supprimer l'utilisateur portant l'id {user}
// Route::delete('/users/{user}', [UserController::class, 'destroy'])
//     ->name('users.destroy');
Route::resource('users', UserController::class);
