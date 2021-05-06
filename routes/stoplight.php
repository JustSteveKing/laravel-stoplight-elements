<?php

use Illuminate\Support\Facades\Route;

Route::view(
    config('stoplight.path.url'),
    'stoplight::docs',
)->name(
    config('stoplight.path.name')
);
