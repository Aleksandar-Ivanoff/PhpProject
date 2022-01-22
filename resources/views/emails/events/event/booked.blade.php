@component('mail::message')
# Introduction

You booked {{ $event->name }}

@component('mail::button', ['url' => route('showEvent',$event)])
View Event
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
