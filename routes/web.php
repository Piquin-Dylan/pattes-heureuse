<?php

use App\Livewire\Greeter;
use App\Livewire\Settings\Appearance;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Profile;
use App\Livewire\Settings\TwoFactor;
use App\Livewire\DescriptionAnimal;
use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Features;

Route::domain('pattes-heureuse.test')->group(function () {
    Route::view('/home', 'client.home')->name('client.home');
    Route::view('/about', 'client.about')->name('client.about');
    Route::view('/volunteers', 'client.volunteers')->name('client.volunteers');
    Route::view('/adoption', 'client.adoption')->name('client.adoption');
    Route::view('/descriptionAnimal', 'client.descriptionAnimal')->name('client.descriptionAnimal');
    Route::view('/contact', 'client.contact')->name('client.contact');
});

Route::domain('admin.pattes-heureuse.test')->middleware(['auth'])->group(function () {
    Route::view('/dashboard', 'dashboard')->name('dashboard');

    Route::get('/greeter', Greeter::class)->name('greeter');
    Route::get('/volunteers', \App\Livewire\Volunteers::class)->name('volunteers');
    Route::get('/show-animal/{animal}', DescriptionAnimal::class)->name('show-animal');

    Route::redirect('/settings', '/settings/profile');
    Route::get('/settings/profile', Profile::class)->name('profile.edit');
    Route::get('/settings/password', Password::class)->name('user-password.edit');
    Route::get('/settings/appearance', Appearance::class)->name('appearance.edit');

    Route::get('/settings/two-factor', TwoFactor::class)
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

Route::get('/', function () {
    return redirect()->route('client.about');
});
