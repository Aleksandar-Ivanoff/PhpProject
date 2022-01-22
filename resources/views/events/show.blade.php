@extends('layouts.app')


@section('content')
  {{-- <div class="single-event d-md-flex mt-30">
    <div class="event-image">
       <img src="{{ $event->image }}" alt="EventImage" width="320px" height="200px">
    </div>
    <div class="event-content media-body">
       <h4 class="event-title">{{ $event-> name}}</h4>
        <p class="text">{{$event->description  }}</p>
        <ul class="event-meta">
           <li>Date: {{ $event->date }}</li>
           <li>Start: {{$event->start  }}</li>
           <li>Location: {{$event->location  }}</li>
           <li>Sport: {{$event->sport->name  }}</li>
           <li>{{ Str::plural('Booking',$event->bookings->count()) }}: {{ $event->bookings->count() }} </li>
       </ul>
    </div> --}}
    <section>  <h1>EVENT</h1></section>
  
@endsection