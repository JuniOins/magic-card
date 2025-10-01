<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommandeController;
use App\Http\Controllers\DonController;
use App\Http\Controllers\ContactController;

Route::view('/', 'home');
Route::view('/equipements', 'equipements');
Route::view('/secure', 'secure');
Route::view('/formations', 'formations');
Route::view('/dons', 'dons');
Route::view('/paiement', 'paiement');
Route::view('/form_don', 'form_don');

// Page Commande / Livraison
Route::get('/commande', [CommandeController::class, 'create'])->name('commande.create');
Route::post('/commandes', [CommandeController::class, 'store'])->name('commandes.store');

// Page Don
Route::get('/don', [DonController::class, 'create'])->name('don.create');
Route::post('/dons', [DonController::class, 'store'])->name('dons.store');

Route::get('/contact', [ContactController::class, 'show'])->name('contact.show');
Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');
