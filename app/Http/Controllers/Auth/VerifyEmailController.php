<?php

namespace App\Http\Controllers\Auth;

use App\Exceptions\InvalidTokenException;
use App\Exceptions\UserAlreadyVerifyException;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\VerifyEmailRequest;
use App\Http\Resources\UserResource;
use App\Models\User;
use Carbon\Carbon;

class VerifyEmailController extends Controller
{
    /**
     * @param VerifyEmailRequest $request
     * @return [type]
     */
    public function __invoke(VerifyEmailRequest $request): UserResource
    {
        $input = $request->validated();
        $user = User::where('token', $input['token'])->first();
        if (!$user) {
            throw new InvalidTokenException();
        }

        if ($user->email_verified_at) {
            throw new UserAlreadyVerifyException();
        }
        $user->email_verified_at = Carbon::now();
        $user->save();

        return new UserResource($user);
    }
}
