@component('mail::message')
# New message from portfolio website

@component('mail::table')
Name: <br>
{{ $name }} <br><br>
Email: <br>
{{ $email }} <br><br>
Message: <br>
{{ $message }} <br><br>
@endcomponent



Thanks,<br>
{{ config('app.name') }}
@endcomponent
