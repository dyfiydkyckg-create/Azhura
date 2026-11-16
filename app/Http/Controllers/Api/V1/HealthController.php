<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;

final class HealthController extends Controller
{
    public function __invoke(): JsonResponse
    {
        return response()->json([
            'success' => true,
            'data' => [
                'service' => config('app.name', 'Azhura'),
                'status' => 'operational',
                'version' => '1.0.0-dev',
            ],
            'meta' => ['timestamp' => now()->toISOString()],
        ]);
    }
}
