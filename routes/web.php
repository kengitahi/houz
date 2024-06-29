<?php

use App\Livewire\Properties;
use App\Livewire\Testing\Test;
use Illuminate\Support\Facades\Route;

Route::view('/', 'livewire.home.index')->name('home');

Route::get('/properties', Properties\Index::class)->name('allProperties');
Route::get('/property/{propertyId}', Properties\Single::class)->name('singleProperty');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::get('/testing', Test::class)->name('test');

require __DIR__.'/auth.php';
