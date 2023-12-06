<?php

namespace App\Exceptions;

use Exception;

class InvalidAutenticationException extends Exception
{
    protected $message = 'Credentials invalid';
    public function render()
    {
        return response()->json([
            'error' => class_basename($this),
            'message' => $this->getMessage()
        ], status: 401);
    }
}