<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return response()->json([
        'name' => config('app.name', 'Azhura'),
        'message' => 'Azhura platform API is ready.',
        'documentation' => 'https://github.com/dyfiydkyckg-create/Azhura',
    ]);
});
