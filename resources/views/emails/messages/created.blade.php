@component('mail::message')
# Hey! Admin

- {{$msg->name}}
- {{$msg->email}}

@component('mail::panel')
    {{$msg->message}}
@endcomponent

{{--@component('mail::button', ['url' => ''])
Button Text
@endcomponent--}}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
