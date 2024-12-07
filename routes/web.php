<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OfficerController;

Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');

// Cases routes
Route::prefix('cases')->name('cases.')->group(function () {
    Route::get('/', function () {
        return view('cases.index');
    })->name('index');
});

// Investigation routes
Route::prefix('investigations')->name('investigations.')->group(function () {
    Route::get('/create', function () {
        return view('investigations.create');
    })->name('create');
});

// Person routes
Route::prefix('person')->name('person.')->group(function () {
    Route::get('/search', function () {
        return view('person.search');
    })->name('search');
});

// Reports route
Route::get('/reports', function () {
    return view('reports.index');
})->name('reports');

// Settings routes
Route::prefix('settings')->name('settings.')->group(function () {
    Route::resource('officers', OfficerController::class);
    Route::get('/add-officers', function () {
        return view('settings.add-officers');
    })->name('add-officers');
    Route::get('/edit-officers', function () {
        return view('settings.edit-officers');
    })->name('edit-officers');
    Route::get('/receiving-types', function () {
        return view('settings.receiving-types');
    })->name('receiving-types');
    Route::get('/common-issues', function () {
        return view('settings.common-issues');
    })->name('common-issues');
});

// Account routes
Route::get('/accounts', function () {
    return view('accounts');
})->name('accounts');

// Help route
Route::get('/help', function () {
    return view('help');
})->name('help');
