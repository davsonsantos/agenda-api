<?php

namespace App\Exceptions;

use App\Http\Traits\RenderToJson;
use Exception;

class InvalidAutenticationException extends Exception
{
    use RenderToJson;
    protected $message = 'Credentials invalid';
    protected $code = 400;
}
