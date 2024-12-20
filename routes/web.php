<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InvestigationController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ReceivingTypeController;
use App\Http\Controllers\CommonIssuesController;

// Redirect root to login
Route::get('/', function () {
    return redirect()->route('login');
});

// Authentication Routes
Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);
});

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Protected Routes
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
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
        Route::get('/create', [InvestigationController::class, 'create'])->name('create');
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
        
        Route::get('/add-officers', [InvestigationController::class, 'addOfficers'])->name('add-officers');
        Route::post('/add-officers', [InvestigationController::class, 'storeOfficer'])->name('store-officer');

        Route::get('/edit-officers', [InvestigationController::class, 'editOfficers'])->name('edit-officers');

        Route::get('/receiving-types', [InvestigationController::class, 'showReceivingTypes'])->name('receiving-types');

        Route::get('/common-issues', [InvestigationController::class, 'showCommonIssues'])->name('common-issues');

        Route::get('/receiving-types-add', function () {
            return view('settings.receiving-types-add');
        })->name('receiving-types-add');

        Route::get('/common-issues-add', function () {
            return view('settings.common-issues-add');
        })->name('common-issues-add');

        Route::post('/settings/add-officers', [InvestigationController::class, 'storeOfficer'])->name('settings.store-officer');

    });

    Route::post('/settings/receiving-types-add', [ReceivingTypeController::class, 'store'])->name('settings.receiving-types.store');

    Route::post('/settings/common-issues', [CommonIssuesController::class, 'store'])->name('settings.common-issues.store');

    Route::put('/settings/receiving-types', [ReceivingTypeController::class, 'update'])->name('settings.receiving-types');

    Route::put('/settings/common-issues', [CommonIssuesController::class, 'update'])->name('settings.common-issues');

    // Account routes
    Route::get('/accounts', function () {
        return view('accounts');
    })->name('accounts');

    // Help route
    Route::get('/help', function () {
        return view('help');
    })->name('help');
});
