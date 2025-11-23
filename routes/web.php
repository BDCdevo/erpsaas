<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

Route::get('/', function () {
    return redirect('/school');
});

// Public routes for terms and privacy (without auth/session requirements)
Route::get('/terms', function () {
    $termsFile = resource_path('markdown/terms.md');
    $terms = Str::markdown(file_get_contents($termsFile));
    return view('public.terms', compact('terms'));
})->name('public.terms');

Route::get('/privacy', function () {
    $policyFile = resource_path('markdown/policy.md');
    $policy = Str::markdown(file_get_contents($policyFile));
    return view('public.policy', compact('policy'));
})->name('public.privacy');
