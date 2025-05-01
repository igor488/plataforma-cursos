<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\AdminController;


Route::get('/', [CursoController::class, 'index'])->name('home');

Route::get('/curso/{id}', [CursoController::class, 'show'])->name('curso.show');

Route::get('/admin/login', [AdminController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [AdminController::class, 'login'])->name('admin.login.submit');

    Route::get('/admin/dashboard', [CursoController::class, 'adminIndex'])->name('admin.dashboard');
    Route::get('/admin/cursos/create', [CursoController::class, 'create'])->name('admin.cursos.create');
    Route::post('/admin/cursos/store', [CursoController::class, 'store'])->name('admin.cursos.store');
    Route::get('/admin/cursos/{id}/edit', [CursoController::class, 'edit'])->name('admin.cursos.edit');
    Route::put('/admin/cursos/{id}', [CursoController::class, 'update'])->name('admin.cursos.update');
    Route::delete('/admin/cursos/{id}', [CursoController::class, 'destroy'])->name('admin.cursos.destroy');

