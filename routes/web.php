<?php

use App\Livewire\HelloPage;
use App\Livewire\AnotherPage;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('hello-page', HelloPage::class)->name('hello-page');

Route::get('another-page', AnotherPage::class)->name('another-page');