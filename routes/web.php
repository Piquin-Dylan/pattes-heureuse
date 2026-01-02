<?php

use App\Livewire\Greeter;
use App\Livewire\Settings\Appearance;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Profile;
use App\Livewire\Settings\TwoFactor;
use App\Livewire\DescriptionAnimal;
use App\Models\Animals;
use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Features;
use Illuminate\Support\Facades\Schema;

Route::view('/', 'client.home')->name('client.home');
Route::view('/about', 'client.about')->name('client.about');
Route::view('/volunteers', 'client.volunteers')->name('client.volunteers');
Route::view('/adoption', 'client.adoption')->name('client.adoption');
Route::view('/contact', 'client.contact')->name('client.contact');

Route::get('/description-animal/{animal}', function (Animals $animal) {
    return view('client.descriptionAnimal', compact('animal'));
})->name('client.descriptionAnimal');

Route::get('/form-adoption/{animal}', function (Animals $animal) {
    return view('client.formAdoption', compact('animal'));
})->name('form-adoption');

Route::get('/check-animals-columns', function () {
    $columns = Schema::getColumnListing('animals');
    return response()->json(['columns' => $columns]);
});

Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::view('/dashboard', 'dashboard')->name('dashboard');

    Route::get('/greeter', Greeter::class)->name('greeter');
    Route::get('/volunteers', \App\Livewire\Volunteers::class)->name('volunteers');
    Route::get('/show-animal/{animal}', DescriptionAnimal::class)->name('show-animal');
    Route::get('/show-adoptions', \App\Livewire\ShowAdoption::class)->name('show-adoptions');

    Route::redirect('/settings', '/admin/settings/profile');
    Route::get('/settings/profile', Profile::class)->name('profile.edit');
    Route::get('/settings/password', Password::class)->name('user-password.edit');
    Route::get('/settings/appearance', Appearance::class)->name('appearance.edit');

    Route::get('/settings/two-factor', TwoFactor::class)
        ->middleware(
            when(
                Features::canManageTwoFactorAuthentication()
                && Features::optionEnabled(Features::twoFactorAuthentication(), 'confirmPassword'),
                ['password.confirm'],
                []
            )
        )
        ->name('two-factor.show');

    Route::get('/', function () {
        return redirect()->route('dashboard');
    });
});
