<?php

namespace App\Http\Controllers\Auth;

use App\Exceptions\InvalidAuthenticationException;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Resources\UserResource;

class LoginController extends Controller
{
    /**
     * Executes the function with the given LoginRequest and returns a UserResource.
     *
     * @param LoginRequest $request The request to be validated
     * @throws InvalidAuthenticationException if authentication attempt fails
     * @return UserResource
     */
    public function __invoke(LoginRequest $request): UserResource
    {
        $input = $request->validated();

        if (!auth()->attempt($input)) {
            throw new InvalidAuthenticationException();
        }

        request()->session()->regenerate();
        return new UserResource(auth()->user());
    }
}
