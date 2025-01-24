<?php

use Illuminate\Support\Facades\Route;



Route::get('/dashboard', \App\Livewire\Admin\Dashboard::class)->name('dashboard');
Route::get('/session', \App\Livewire\Admin\Sessions\Sessions::class)->name('session');