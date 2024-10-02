<?php

use App\Livewire\AddCar;
use App\Livewire\CarList;
use App\Livewire\Testpage;
use App\Livewire\EditCar;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/test/page', Testpage::class);
Route::get('/carlists', CarList::class);
Route::get('/add/new', AddCar::class);
Route::get('/edit/car/{id}', EditCar::class);

