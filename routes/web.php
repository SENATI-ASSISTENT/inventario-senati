<?php

use App\Http\Controllers\MachineController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
});

Route::resource('machines', MachineController::class);

use App\Http\Controllers\ComponentController;
use App\Http\Controllers\DetectionController;

Route::prefix('machines')->group(function () {
 Route::get('/', [MachineController::class, 'index']);
    Route::post('/', [MachineController::class, 'store']);
    Route::get('/{machine}', [MachineController::class, 'show']);
    Route::put('/{machine}', [MachineController::class, 'update']);
    Route::delete('/{machine}', [MachineController::class, 'destroy']);
  Route::get('/{machine}/components', [ComponentController::class, 'index']);
    Route::post('/{machine}/components', [ComponentController::class, 'store']);
    Route::get('/{machine}/components/{component}', [ComponentController::class, 'show']);
    Route::put('/{machine}/components/{component}', [ComponentController::class, 'update']);
    Route::delete('/{machine}/components/{component}', [ComponentController::class, 'destroy']);

  Route::get('/{machine}/detections', [DetectionController::class, 'index']);
    Route::post('/{machine}/detections', [DetectionController::class, 'store']);
    Route::get('/{machine}/detections/{detection}', [DetectionController::class, 'show']);
    Route::put('/{machine}/detections/{detection}', [DetectionController::class, 'update']);
    Route::delete('/{machine}/detections/{detection}', [DetectionController::class, 'destroy']);
});
