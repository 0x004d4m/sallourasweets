<?php

use Illuminate\Support\Facades\Route;

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\Base.
// Routes you generate using Backpack\Generators will be placed here.

Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => array_merge(
        (array) config('backpack.base.web_middleware', 'web'),
        (array) config('backpack.base.middleware_key', 'admin')
    ),
    'namespace'  => 'App\Http\Controllers\Admin',
], function () { // custom admin routes
    Route::crud('testmonial', 'TestmonialCrudController');
    Route::crud('category', 'CategoryCrudController');
    Route::crud('item', 'ItemCrudController');
    Route::crud('social', 'SocialCrudController');
    Route::crud('branch', 'BranchCrudController');
    Route::crud('image', 'ImageCrudController');
    Route::crud('policy', 'PolicyCrudController');
    Route::crud('counter', 'CounterCrudController');
    Route::crud('video', 'VideoCrudController');
}); // this should be the absolute last line of this file