@component('mail::message')
# Introduction
<h1>{{$msg["subject"]}}</h1>
<p>{{$msg["name"]}}</p>
<p>{{$msg["email"]}}</p>
<p>{{$msg["tel"]}}</p>
<p>{{$msg["consult"]}}</p>
@component('mail::button', ['url' => ''])
@endcomponent
Thanks,<br>
{{ config('app.name') }}
@endcomponent