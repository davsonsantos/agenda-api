@extends('emails.layouts.default')
@section('content')
    <p style="font-family: Helvetica, sans-serif; font-size: 16px; font-weight: normal; margin: 0; margin-bottom: 16px;">
        Olá {{ $user->first_name }},
    </p>
    <p style="font-family: Helvetica, sans-serif; font-size: 16px; font-weight: normal; margin: 0; margin-bottom: 16px;">
        O seu token para resetar a senha é: {{ $token }}
    </p>
@endsection
