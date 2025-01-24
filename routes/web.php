<?php

use Illuminate\Support\Facades\Route;



Route::get('/', \App\Livewire\Home\HomePage::class)->name('home');
Route::get('/page-one', \App\Livewire\Home\PageOne::class)->name('page-1');
Route::get('/page-two', \App\Livewire\Home\PageTwo::class)->name('page-2');
Route::get('/page-three', \App\Livewire\Home\PageThree::class)->name('page-3');
Route::get('/dashboard', \App\Livewire\Admin\Dashboard::class)->name('dashboard');
Route::get('/session', \App\Livewire\Admin\Sessions\Sessions::class)->name('session');
Route::get('/specialities', \App\Livewire\Admin\Specialties\SpecialityList::class)->name('speciality');
