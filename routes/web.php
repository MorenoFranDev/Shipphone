<?php

use App\Http\Controllers\panel;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// New sells
Route::get('/new-sell', function () {
    return view('layouts/new-sell');
})->name('newSell');
Route::post('/new-sell', [panel::class, 'storeSell'])->name('Sell');

// List Sell
Route::get('/list-sell',[panel::class, 'indexSell'])->name('listSell');


#New Service
Route::get('/new-service', function () {
    return view('layouts/new-service');
});
Route::post('/new-service', [panel::class, 'storeService'])->name('newService');


#List Service
Route::get('/list-service', [panel::class, 'indexService'])->name('list-service');


#Edit Service
Route::get('/edit-service/{id}',[panel::class, 'showService'])->name('showService');