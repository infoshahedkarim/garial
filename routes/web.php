<?php

use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Features;
use Livewire\Volt\Volt;

Route::get('/', function () {
    return view('frontend.index');
})->name('home');

Route::get('/services', function () {
    return view('frontend.services');
})->name('service');

Route::get('/services-one', function () {
    return view('frontend.service.one');
})->name('service.one');

Route::get('/services-two', function () {
    return view('frontend.service.two');
})->name('service.two');

Route::get('/services-three', function () {
    return view('frontend.service.three');
})->name('service.three');

Route::get('/services-four', function () {
    return view('frontend.service.four');
})->name('service.four');

Route::get('/services-five', function () {
    return view('frontend.service.five');
})->name('service.five');

Route::get('/services-six', function () {
    return view('frontend.service.six');
})->name('service.six');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('profile.edit');
    Volt::route('settings/password', 'settings.password')->name('user-password.edit');
    Volt::route('settings/appearance', 'settings.appearance')->name('appearance.edit');

    Volt::route('settings/two-factor', 'settings.two-factor')
        ->middleware(
            when(
                Features::canManageTwoFactorAuthentication()
                    && Features::optionEnabled(Features::twoFactorAuthentication(), 'confirmPassword'),
                ['password.confirm'],
                [],
            ),
        )
        ->name('two-factor.show');
});
