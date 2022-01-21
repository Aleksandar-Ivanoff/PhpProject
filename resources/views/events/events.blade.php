@extends('layouts.app')

@section('content')

<section id="event" class="event-schedule pt-115 pb-130">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-title text-center">
                    <h2 class="title">EVENTS</h2>
                    <p class="text">Lorem ipsum dolor sit amet, in quodsi vulputate pro. Ius illum vocent mediocritatem reiciendis odit sed, vero amet blanditiis cule dicta iriure at phaedrum.</p>
                </div> <!-- section title -->
            </div>
        </div> <!-- row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="event-tab mt-60">
                    <div>
                        <div class="mx-auto pull-right">
                            <div class="">
                                <form action="/search" type="GET" role="search">
                                    <div class="input-group">
                                        <span class="input-group-btn">
                                            <button class="btn btn-info lupa-kopche" type="submit" title="Search projects">
                                                <span class="lupa">&#128270;
                                                    </span>
                                            </button>
                                        </span>
                                        <input type="text" class="form-control" name="query" placeholder="Search events" id="query">
                                        <!-- <a href="" class=" mt-1">
                                           
                                        </a> -->
                                    </div>
                                </form>
                                {{-- <form class="form-inline my-2 my-lg-0" type="get" action="{{ url('/search') }}">
                                    <input class="form-control mr-sm-2" type="search" name="query" id="" placeholder="Search">
                                    <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
                                </form> --}}
                            </div>
                        </div>
                    </div>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="day-1" role="tabpanel" aria-labelledby="day-1-tab">
                            <div class="event-content pt-40">

                                @if ($events->count())
                               @foreach ($events as $event)

                               <div class="single-event d-md-flex mt-30">
                                   <div class="event-image">
                                      <img src="{{ $event->image }}" alt="EventImage" width="320px" height="200px">
                                   </div>
                                   <div class="event-content media-body">
                                      <h4 class="event-title">{{ $event-> name}}</h4>
                                       <p class="text">{{$event->description  }}</p>
                                       <ul class="event-meta">
                                          <li>Start: {{$event->start  }}</li>
                                          <li>Location: {{$event->location  }}</li>
                                          <li>Sport: {{$event->sport->name  }}</li>
                                      </ul>
                                    </div>
                                </div> <!-- single event -->
                            @endforeach
                            {{ $events->links()}}
                                @else
                                <h2>There are no events!</h2>
                                @endif
                                
                            </div> <!-- event content -->
                            
                        </div>
                                          
                    </div>
                    
                </div> <!-- event tab -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>

@endsection