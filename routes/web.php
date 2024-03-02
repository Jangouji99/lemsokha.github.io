<?php

use App\Http\Controllers\Lang\LangComponent;
use App\Http\Controllers\Lang\LocalizationController;
use App\Http\Livewire\Index\Index;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

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

Route::middleware(['setlocale'])->group(function () {
    // Your routes go here

    Route::get('/', Index::class);

    // Add more routes as needed
});