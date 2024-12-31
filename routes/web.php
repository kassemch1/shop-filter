<?php

use App\Http\Controllers\Shop;
use Illuminate\Support\Facades\Route;

Route::get('/', [Shop::class, 'index'])->name('shop.index');

