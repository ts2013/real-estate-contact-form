<?php
namespace Ts2013\RealEstateContactForm;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//important to notice - without web middleware csrf-token will not generated leading page to expire
Route::middleware(['web'])->group(function () {
    Route::get('real-estate-contact-form', Http\Livewire\RealEstateContactForm::class)->name('real-estate-contact-form');
});
