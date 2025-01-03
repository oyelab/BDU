<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('{any}', function ($any) {
    // Check if the view exists in the `resources/views` directory
    if (view()->exists($any)) {
        return view($any);
    }

    // Return a 404 error if the view does not exist
    abort(404);
})->where('any', '.*'); // Matches any route pattern
