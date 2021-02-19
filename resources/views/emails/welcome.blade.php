@component('mail::message')
# {{$mail->title}}

{{$mail->description}}

@component('mail::button', ['url' => '/category'])
Shop Now!
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent