@component('mail::message')
# Hey Salih

-{{ $msg->name }}<br>
-{{ $msg->email }}

@component('mail::panel')
{{ $msg }}
@endcomponent

@component('mail::button', ['url' => '', 'color' => 'green'])
Creer un compte
@endcomponent

Merci Salih pour <br>
{{ config('app.name') }}
@endcomponent
