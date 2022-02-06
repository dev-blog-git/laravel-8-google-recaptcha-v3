@component('mail::message')
    Name: {{ $message['name'] }}
    Email: {{ $message['email'] }}
    {{ $message['message'] }}
@endcomponent