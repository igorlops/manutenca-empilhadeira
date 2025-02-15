<?php

use App\Http\Controllers\FormHomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FormHomeController::class, 'getForm'])->name('form.contact');
Route::get('/panelcontrol', [FormHomeController::class, 'getContactsSaved'])->name('form.panel');
Route::post('/notification', [FormHomeController::class, 'formStore'])->name('form.store');
