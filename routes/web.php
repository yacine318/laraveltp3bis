<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\aliment_saisonC;


Route::get('/', [aliment_saisonC::class, 'index'])->name('accueil');
Route::get('/all', [aliment_saisonC::class, 'index']);
Route::get('/detailAliment/{id}', [aliment_saisonC::class, 'detailA']);


