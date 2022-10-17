@component('mail::message')
# Introduction

The body of your message.
{{-- <ul>

@foreach($vars as $var)
	<li>{{$var->code}}</li>
@endforeach
</ul> --}}
@component('mail::panel')
nnkkmkmkmk jhh
@endcomponent

@component('mail::button', ['url' => '',"color"=>'green'])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@component('mail::panel')
	This Good news
@endcomponent
@endcomponent
