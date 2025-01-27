<?php

use App\Mail\RegistrationCreated;
use App\Models\EventRegistration;
use App\Http\Middleware\AdminMiddleware;
use Illuminate\Support\Facades\Route;



Route::get('/', \App\Livewire\Home\HomePage::class)->name('home');

Route::get('/login', \App\Livewire\Auth\Login::class)->name('login');
Route::group(['middleware' => [AdminMiddleware::class]], function () {
    Route::get('/dashboard', \App\Livewire\Admin\Dashboard::class)->name('dashboard');
    Route::get('/session', \App\Livewire\Admin\Sessions\Sessions::class)->name('session');
    Route::get('/specialities', \App\Livewire\Admin\Specialties\SpecialityList::class)->name('speciality');
    Route::get('/registrations', \App\Livewire\Admin\Registrations\RegistrationsList::class)->name('registrations');

    Route::group(['prefix' => 'reports'], function () {
        Route::get('/registrations', \App\Livewire\Admin\Reports\RegistrationReport::class)->name('reports.registrations');
        Route::get('/sessions', \App\Livewire\Admin\Reports\SessionReport::class)->name('reports.sessions');
        Route::get('/students', \App\Livewire\Admin\Reports\StudentsReport::class)->name('reports.students');
        Route::get('/parents', \App\Livewire\Admin\Reports\ParentsReport::class)->name('reports.parents');
        Route::group(['prefix' => 'room'], function () {
            Route::get('/four', \App\Livewire\Admin\Reports\Rooms\RoomFour::class)->name('reports.rooms.four');
        });
    });
});
Route::get('/page-one/{id}', \App\Livewire\Home\PageOne::class)->name('page-1');
Route::get('/page-two', \App\Livewire\Home\PageTwo::class)->name('page-2');
Route::get('/page-three', \App\Livewire\Home\PageThree::class)->name('page-3');

Route::get('mail-preview', function () {
    $reg = EventRegistration::latest()->first();
    return (new RegistrationCreated($reg));
});
