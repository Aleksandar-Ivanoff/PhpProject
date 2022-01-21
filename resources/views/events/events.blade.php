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
                                <form action="/events" method="GET" role="search">
                                    <div class="input-group">
                                        <span class="input-group-btn">
                                            <button class="btn btn-info lupa-kopche" type="submit" title="Search projects">
                                                <span class="lupa">&#128270;
                                                    </span>
                                            </button>
                                        </span>
                                        <input type="text" class="form-control" name="term" placeholder="Search projects" id="term">
                                        <!-- <a href="" class=" mt-1">
                                           
                                        </a> -->
                                    </div>
                                </form>
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

                                @else
                                <h2>There are no events!</h2>
                                @endif
                                

                                
                            </div> <!-- event content -->
                        </div>
                        <div class="tab-pane fade" id="day-2" role="tabpanel" aria-labelledby="day-2-tab">
                            <div class="event-content pt-40">
                                <div class="single-event d-md-flex mt-30">
                                    <div class="event-image">
                                        <img src="assets/images/event-1.jpg" alt="Event">
                                    </div>
                                    <div class="event-content media-body">
                                        <h4 class="event-title">Web Design Principle and Best Practise</h4>
                                        <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet minima dolores rerum maiores qui at commodi quas, reprehenderit eius consectetur quae magni molestias veniam, provident illum facere iure libero asperiores!</p>
                                        <ul class="event-meta">
                                            <li>Start: 12.00 PM</li>
                                            <li>End: 15.00 PM</li>
                                            <li>Location: Hall 1 , Building A, Golden Street, Southafrica</li>
                                        </ul>
                                    </div>
                                </div> <!-- single event -->

                                <div class="single-event d-md-flex mt-30">
                                    <div class="event-image">
                                        <img src="assets/images/event-2.jpg" alt="Event">
                                    </div>
                                    <div class="event-content media-body">
                                        <h4 class="event-title">15 FREE PRODUCTIVE DESIGN TOOLS</h4>
                                        <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet minima dolores rerum maiores qui at commodi quas, reprehenderit eius consectetur quae magni molestias veniam, provident illum facere iure libero asperiores!</p>
                                        <ul class="event-meta">
                                            <li>Start: 12.00 PM</li>
                                            <li>End: 15.00 PM</li>
                                            <li>Location: Hall 1 , Building A, Golden Street, Southafrica</li>
                                        </ul>
                                    </div>
                                </div> <!-- single event -->

                                <div class="single-event d-md-flex mt-30">
                                    <div class="event-image">
                                        <img src="assets/images/event-3.jpg" alt="Event">
                                    </div>
                                    <div class="event-content media-body">
                                        <h4 class="event-title">GETTING STARTED WITH SKETCHAPP</h4>
                                        <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet minima dolores rerum maiores qui at commodi quas, reprehenderit eius consectetur quae magni molestias veniam, provident illum facere iure libero asperiores!</p>
                                        <ul class="event-meta">
                                            <li>Start: 12.00 PM</li>
                                            <li>End: 15.00 PM</li>
                                            <li>Location: Hall 1 , Building A, Golden Street, Southafrica</li>
                                        </ul>
                                    </div>
                                </div> <!-- single event -->
                            </div> <!-- event content -->
                        </div>
                        <div class="tab-pane fade" id="day-3" role="tabpanel" aria-labelledby="day-3-tab">
                            <div class="event-content pt-40">
                                <div class="single-event d-md-flex mt-30">
                                    <div class="event-image">
                                        <img src="assets/images/event-1.jpg" alt="Event">
                                    </div>
                                    <div class="event-content media-body">
                                        <h4 class="event-title">Web Design Principle and Best Practise</h4>
                                        <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet minima dolores rerum maiores qui at commodi quas, reprehenderit eius consectetur quae magni molestias veniam, provident illum facere iure libero asperiores!</p>
                                        <ul class="event-meta">
                                            <li>Start: 12.00 PM</li>
                                            <li>End: 15.00 PM</li>
                                            <li>Location: Hall 1 , Building A, Golden Street, Southafrica</li>
                                        </ul>
                                    </div>
                                </div> <!-- single event -->

                                <div class="single-event d-md-flex mt-30">
                                    <div class="event-image">
                                        <img src="assets/images/event-2.jpg" alt="Event">
                                    </div>
                                    <div class="event-content media-body">
                                        <h4 class="event-title">15 FREE PRODUCTIVE DESIGN TOOLS</h4>
                                        <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet minima dolores rerum maiores qui at commodi quas, reprehenderit eius consectetur quae magni molestias veniam, provident illum facere iure libero asperiores!</p>
                                        <ul class="event-meta">
                                            <li>Start: 12.00 PM</li>
                                            <li>End: 15.00 PM</li>
                                            <li>Location: Hall 1 , Building A, Golden Street, Southafrica</li>
                                        </ul>
                                    </div>
                                </div> <!-- single event -->

                                <div class="single-event d-md-flex mt-30">
                                    <div class="event-image">
                                        <img src="assets/images/event-3.jpg" alt="Event">
                                    </div>
                                    <div class="event-content media-body">
                                        <h4 class="event-title">GETTING STARTED WITH SKETCHAPP</h4>
                                        <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet minima dolores rerum maiores qui at commodi quas, reprehenderit eius consectetur quae magni molestias veniam, provident illum facere iure libero asperiores!</p>
                                        <ul class="event-meta">
                                            <li>Start: 12.00 PM</li>
                                            <li>End: 15.00 PM</li>
                                            <li>Location: Hall 1 , Building A, Golden Street, Southafrica</li>
                                        </ul>
                                    </div>
                                </div> <!-- single event -->
                            </div> <!-- event content -->
                        </div>
                        <div class="tab-pane fade" id="day-4" role="tabpanel" aria-labelledby="day-4-tab">
                            <div class="event-content pt-40">
                                <div class="single-event d-md-flex mt-30">
                                    <div class="event-image">
                                        <img src="assets/images/event-1.jpg" alt="Event">
                                    </div>
                                    <div class="event-content media-body">
                                        <h4 class="event-title">Web Design Principle and Best Practise</h4>
                                        <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet minima dolores rerum maiores qui at commodi quas, reprehenderit eius consectetur quae magni molestias veniam, provident illum facere iure libero asperiores!</p>
                                        <ul class="event-meta">
                                            <li>Start: 12.00 PM</li>
                                            <li>End: 15.00 PM</li>
                                            <li>Location: Hall 1 , Building A, Golden Street, Southafrica</li>
                                        </ul>
                                    </div>
                                </div> <!-- single event -->

                                <div class="single-event d-md-flex mt-30">
                                    <div class="event-image">
                                        <img src="assets/images/event-2.jpg" alt="Event">
                                    </div>
                                    <div class="event-content media-body">
                                        <h4 class="event-title">15 FREE PRODUCTIVE DESIGN TOOLS</h4>
                                        <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet minima dolores rerum maiores qui at commodi quas, reprehenderit eius consectetur quae magni molestias veniam, provident illum facere iure libero asperiores!</p>
                                        <ul class="event-meta">
                                            <li>Start: 12.00 PM</li>
                                            <li>End: 15.00 PM</li>
                                            <li>Location: Hall 1 , Building A, Golden Street, Southafrica</li>
                                        </ul>
                                    </div>
                                </div> <!-- single event -->

                                <div class="single-event d-md-flex mt-30">
                                    <div class="event-image">
                                        <img src="assets/images/event-3.jpg" alt="Event">
                                    </div>
                                    <div class="event-content media-body">
                                        <h4 class="event-title">GETTING STARTED WITH SKETCHAPP</h4>
                                        <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet minima dolores rerum maiores qui at commodi quas, reprehenderit eius consectetur quae magni molestias veniam, provident illum facere iure libero asperiores!</p>
                                        <ul class="event-meta">
                                            <li>Start: 12.00 PM</li>
                                            <li>End: 15.00 PM</li>
                                            <li>Location: Hall 1 , Building A, Golden Street, Southafrica</li>
                                        </ul>
                                    </div>
                                </div> <!-- single event -->
                            </div> <!-- event content -->
                        </div>
                    </div>
                </div> <!-- event tab -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>

@endsection