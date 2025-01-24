<?php

use Illuminate\Support\Facades\Route;



Route::get('/', \App\Livewire\Admin\Dashboard::class)->name('dashboard');