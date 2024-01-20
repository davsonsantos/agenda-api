<?php

namespace App\Http\Controllers\Auth;

use App\Exceptions\InvalidAutenticationException;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Resources\User\UserResource;

class LoginController extends Controller
{
    /**
     * @param LoginRequest $request      
     * @return UserResource
     * @throws InvalidAutenticationException
     */
    public function __invoke(LoginRequest $request): UserResource
    {
        $input = $request->validated();
        if (!auth()->attempt($input)) {
            throw new InvalidAutenticationException();
        }
        request()->session()->regenerate();
        return new UserResource(auth()->user());
    }
}
