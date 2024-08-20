<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VehiculoController;
use App\Http\Controllers\ConductorController;
use App\Http\Controllers\PropietarioController;
use App\Http\Controllers\TractoCamionController;

Route::get('/', function () {
    return redirect()->route('login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/usuarios', [UsersController::class, 'index'])->name('user.index');
    Route::get('/users/create', [UsersController::class, 'create'])->name('user.create');
    Route::post('/users/store-user', [UsersController::class, 'store'])->name('user.store');
    Route::get('/users/{id}/edit-user', [UsersController::class, 'edit'])->name('user.edit');
    Route::post('/users/{id}/update-user', [UsersController::class, 'update'])->name('user.update');
    Route::delete('/users/{id}/delete-user', [UsersController::class, 'destroy'])->name('user.destroy');

    Route::get('/propietarios', [PropietarioController::class, 'index'])->name('propietario.index');
    Route::get('/propietarios/create', [PropietarioController::class, 'create'])->name('propietario.create');
    Route::post('/propietarios/store-propietario', [PropietarioController::class, 'store'])->name('propietario.store');
    Route::get('/propietarios/{id}/show-propietario', [PropietarioController::class, 'show'])->name('propietario.show');
    Route::get('/propietarios/{id}/edit-propietario', [PropietarioController::class, 'edit'])->name('propietario.edit');
    Route::put('/propietarios/{id}/update-propietario', [PropietarioController::class, 'update'])->name('propietario.update');
    Route::delete('/propietarios/{id}/delete-propietario', [PropietarioController::class, 'destroy'])->name('propietario.destroy');
    Route::post('/propietarios/{id}/upload-file', [PropietarioController::class, 'uploadFiles'])->name('propietario.uploadFiles');
    Route::post('/propietarios/{id}/add-cuenta', [PropietarioController::class, 'addCuentaBancaria'])->name('propietario.addCuentaBancaria');
    Route::delete('/propietarios/{id}/{cuenta}/delete-cuenta', [PropietarioController::class, 'deleteCuentaBancaria'])->name('propietario.deleteCuentaBancaria');


    Route::get('/tracto-camiones', [TractoCamionController::class, 'index'])->name('tracto-camiones.index');
    Route::get('/tracto-camiones/create', [TractoCamionController::class, 'create'])->name('tracto-camiones.create');
    Route::post('/tracto-camiones/store-tracto-camiones', [TractoCamionController::class, 'store'])->name('tracto-camiones.store');
    Route::get('/tracto-camiones/{id}/show-tracto-camiones', [TractoCamionController::class, 'show'])->name('tracto-camiones.show');
    Route::get('/tracto-camiones/{id}/edit-tracto-camiones', [TractoCamionController::class, 'edit'])->name('tracto-camiones.edit');
    Route::put('/tracto-camiones/{id}/update-tracto-camiones', [TractoCamionController::class, 'update'])->name('tracto-camiones.update');
    Route::delete('/tracto-camiones/{id}/delete-tracto-camiones', [TractoCamionController::class, 'destroy'])->name('tracto-camiones.destroy');
    Route::post('/tracto-camiones/{id}/upload-file', [TractoCamionController::class, 'uploadFiles'])->name('tracto-camiones.uploadFiles');


    Route::get('/conductores', [ConductorController::class, 'index'])->name('conductor.index');
    Route::get('/conductores/create', [ConductorController::class, 'create'])->name('conductor.create');
    Route::post('/conductores/store-conductor', [ConductorController::class, 'store'])->name('conductor.store');
    Route::get('/conductores/{id}/show-conductor', [ConductorController::class, 'show'])->name('conductor.show');
    Route::get('/conductores/{id}/edit-conductor', [ConductorController::class, 'edit'])->name('conductor.edit');
    Route::put('/conductores/{id}/update-conductor', [ConductorController::class, 'update'])->name('conductor.update');
    Route::delete('/conductores/{id}/delete-conductor', [ConductorController::class, 'destroy'])->name('conductor.destroy');
    Route::post('/conductores/{id}/upload-file', [ConductorController::class, 'uploadFiles'])->name('conductor.uploadFiles');

});

require __DIR__.'/auth.php';
