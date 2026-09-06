<?php

use App\Http\Controllers\ExternalBlogController;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return redirect('/app'); // ডিফল্টভাবে /app-এ রিডাইরেক্ট করবে
}); 

Route::get('/app', [PostController::class, 'showUi']);
Route::get('/external-blogs', [PostController::class, 'showExternal']);