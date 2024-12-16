<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TramoController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\EntregaController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReportesController;
use App\Http\Controllers\VehiculoController;
use App\Http\Controllers\ConductorController;
use App\Http\Controllers\PropietarioController;
use App\Http\Controllers\ConciliacionController;
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
    Route::get('/usuarios/create', [UsersController::class, 'create'])->name('user.create');
    Route::post('/usuarios/store-user', [UsersController::class, 'store'])->name('user.store');
    Route::get('/usuarios/{id}/edit-user', [UsersController::class, 'edit'])->name('user.edit');
    Route::post('/usuarios/{id}/update-user', [UsersController::class, 'update'])->name('user.update');
    Route::delete('/usuarios/{id}/delete-user', [UsersController::class, 'destroy'])->name('user.destroy');

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


    Route::get('/combustibles', [ProductController::class, 'index'])->name('product.index');
    Route::get('/combustibles/create', [ProductController::class, 'create'])->name('product.create');
    Route::post('/combustibles/store-combustible', [ProductController::class, 'store'])->name('product.store');
    Route::get('/combustibles/{id}/edit-combustible', [ProductController::class, 'edit'])->name('product.edit');
    Route::post('/combustibles/{id}/update-combustible', [ProductController::class, 'update'])->name('product.update');
    Route::delete('/combustibles/{id}/delete-combustible', [ProductController::class, 'destroy'])->name('product.destroy');

    Route::get('/tramos', [TramoController::class, 'index'])->name('tramo.index');
    Route::get('/tramos/create', [TramoController::class, 'create'])->name('tramo.create');
    Route::post('/tramos/store-tramo', [TramoController::class, 'store'])->name('tramo.store');
    Route::get('/tramos/{id}/edit-tramo', [TramoController::class, 'edit'])->name('tramo.edit');
    Route::post('/tramos/{id}/update-tramo', [TramoController::class, 'update'])->name('tramo.update');
    Route::delete('/tramos/{id}/delete-tramo', [TramoController::class, 'destroy'])->name('tramo.destroy');

    Route::get('/conciliaciones', [ConciliacionController::class, 'index'])->name('conciliacion.index');
    Route::get('/conciliaciones/create', [ConciliacionController::class, 'create'])->name('conciliacion.create');
    Route::post('/conciliaciones/store-conciliacion', [ConciliacionController::class, 'store'])->name('conciliacion.store');
    Route::get('/conciliaciones/{id}/edit-conciliacion', [ConciliacionController::class, 'edit'])->name('conciliacion.edit');
    Route::post('/conciliaciones/{id}/update-conciliacion', [ConciliacionController::class, 'update'])->name('conciliacion.update');
    Route::delete('/conciliaciones/{id}/delete-conciliacion', [ConciliacionController::class, 'destroy'])->name('conciliacion.destroy');

    Route::get('/entregas', [EntregaController::class, 'index'])->name('entrega.index');
    Route::get('/entregas/create', [EntregaController::class, 'create'])->name('entrega.create');
    Route::post('/entregas/store-entrega', [EntregaController::class, 'store'])->name('entrega.store');
    Route::get('/entregas/{id}/show-entrega', [EntregaController::class, 'show'])->name('entrega.show');
    Route::get('/entregas/{id}/edit-entrega', [EntregaController::class, 'edit'])->name('entrega.edit');
    Route::post('/entregas/{id}/update-entrega', [EntregaController::class, 'update'])->name('entrega.update');
    Route::delete('/entregas/{id}/delete-entrega', [EntregaController::class, 'destroy'])->name('entrega.destroy');

    # get productos
    Route::get('/get-productos/{id}', [EntregaController::class, 'getProducts'])->name('entrega.getProducts');

    #Reportes
    Route::get('/reportes', [ReportesController::class, 'index'])->name('reportes.index');
    Route::post('/reportes/generar', [ReportesController::class, 'generar'])->name('reportes.generar');
});

require __DIR__.'/auth.php';
