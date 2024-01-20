<?php

namespace App\Http\Traits;

use Illuminate\Http\JsonResponse;

trait RenderToJson
{
    /**
     * Renderizar json excepiton
     * @return JsonResponse
     */
    public function render(): JsonResponse
    {
        return response()->json([
            'error' => class_basename($this),
            'message' => $this->getMessage()
        ], status: $this->getCode());
    }
}
