<?php

namespace App\Http\Controllers\Auth;

use App\Exceptions\InvalidPassowordResetTokenException;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\ReesetPasswordRequest;
use App\Models\PasswordResetToken;
use Illuminate\Http\Request;

class ResetPasswordController extends Controller
{
    public function __invoke(ReesetPasswordRequest $request): void
    {
        $input = $request->validated();
        $token = PasswordResetToken::query()
            ->whereToken($input['token'])
            ->whereDate('created_at', '>=', now()->subHours(24)->toDateTimeString())
            ->first();
        if (!$token) {
            throw new InvalidPassowordResetTokenException();
        }
        $user = $token->user;
        $user->password = bcrypt($input['password']);
        $user->save();
        $user->resetPasswordTokens()->delete();
    }
}
