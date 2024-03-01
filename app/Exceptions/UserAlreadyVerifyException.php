<?php

namespace App\Exceptions;

use App\Traits\RenderToJson;
use Exception;

class UserAlreadyVerifyException extends Exception
{
    use RenderToJson;
    protected $message = 'User has already been verified.';
    protected $code = 400;
}
