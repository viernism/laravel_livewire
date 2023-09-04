<?php

use Illuminate\Support\Facades\Route;

use App\Livewire\Posts\Index;
use App\Livewire\Posts\Create;
use App\Livewire\Posts\Edit;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// route posts index
Route::get('/', Index::class)->name('posts.index');

// route create index
Route::get('/create', Create::class)->name('posts.create');

// route posts edit
Route::get('/edit/{id}', Edit::class)->name('posts.edit');