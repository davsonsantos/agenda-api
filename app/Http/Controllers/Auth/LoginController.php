<?php

namespace App\Http\Controllers\Auth;

use App\Exceptions\InvalidAutenticationException;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Resources\User\UserResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(LoginRequest $request)
    {
        $input = $request->validated();
        if (!Auth::attempt($input)) {
            throw new InvalidAutenticationException();
        }

        $request->session()->regenerate();

        return new UserResource(auth()->user());
    }
}

