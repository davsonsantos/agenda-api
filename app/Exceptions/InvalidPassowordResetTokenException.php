<?php

namespace App\Exceptions;

use App\Traits\RenderToJson;
use Exception;

class InvalidPassowordResetTokenException extends Exception
{
    use RenderToJson;
    protected $message = 'Invalid password reset token.';
    protected $code = 400;
}
