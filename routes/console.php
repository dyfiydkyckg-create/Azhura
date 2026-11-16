<?php

use Illuminate\Support\Facades\Artisan;

Artisan::command('azhura:about', function (): void {
    $this->info('Azhura — modular platform foundation');
    $this->line('Environment: '.app()->environment());
})->purpose('Display Azhura application information');
