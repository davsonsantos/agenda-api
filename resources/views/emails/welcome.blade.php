@extends('emails.layouts.default')
@section('content')
    <p style="font-family: Helvetica, sans-serif; font-size: 16px; font-weight: normal; margin: 0; margin-bottom: 16px;">
        Olá {{ $user->first_name }},
    </p>
    <p style="font-family: Helvetica, sans-serif; font-size: 16px; font-weight: normal; margin: 0; margin-bottom: 16px;">
        Seja muito bem-vindo ao {{ config('app.name') }}
    </p>
    <p style="font-family: Helvetica, sans-serif; font-size: 16px; font-weight: normal; margin: 0; margin-bottom: 16px;">
        Clique no botão abaixo para varificar sua conta.
    </p>
    <table role="presentation" border="0" cellpadding="0" cellspacing="0" class="btn btn-primary"
        style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; box-sizing: border-box; width: 100%; min-width: 100%;"
        width="100%">
        <tbody>
            <tr>
                <td align="left"
                    style="font-family: Helvetica, sans-serif; font-size: 16px; vertical-align: top; padding-bottom: 16px;"
                    valign="top">
                    <table role="presentation" border="0" cellpadding="0" cellspacing="0"
                        style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: auto;">
                        <tbody>
                            <tr>
                                <td style="font-family: Helvetica, sans-serif; font-size: 16px; vertical-align: top; border-radius: 4px; text-align: center; background-color: #0867ec;"
                                    valign="top" align="center" bgcolor="#0867ec"> <a href="http://htmlemail.io"
                                        target="_blank"
                                        style="border: solid 2px #0867ec; border-radius: 4px; box-sizing: border-box; cursor: pointer; display: inline-block; font-size: 16px; font-weight: bold; margin: 0; padding: 12px 24px; text-decoration: none; text-transform: capitalize; background-color: #0867ec; border-color: #0867ec; color: #ffffff;">
                                        Verificar conta
                                    </a> </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
        </tbody>
    </table>

    <p style="font-family: Helvetica, sans-serif; font-size: 16px; font-weight: normal; margin: 0; margin-bottom: 16px;">
        Good luck! Hope it works.</p>
@endsection
