<?php

namespace App\Exceptions;

use App\Traits\RenderToJson;
use Exception;

class InvalidTokenException extends Exception
{
    use RenderToJson;
    protected $message = 'Token is invalid.';
    protected $code = 400;
}
