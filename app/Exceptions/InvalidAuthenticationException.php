<?php

namespace App\Exceptions;

use App\Traits\RenderToJson;
use Exception;
use Illuminate\Http\Response;

class InvalidAuthenticationException extends Exception
{
    use RenderToJson;
    protected $message = 'Your credentials don\'t match.';
    protected $code = 400;
}
