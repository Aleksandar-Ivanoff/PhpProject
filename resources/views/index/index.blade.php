@extends('layouts.app')

@section('content')

<div id="home" class="header-content-area bg_cover d-flex align-items-center" style="background-image: url(assets/images/sporteventWallpaper.jpg)">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
               
                
                <div class="header-content text-center">
                    <h2 class="header-title"> Sport Eventify</h2>
                    <h3 class="sub-title">The best site to visit best events! Go and grab your tickets now!</h3>
                    
                    @if(auth()->user())
                   
                    @else
                    <ul class="header-btn">
                        <li><a class="main-btn main-btn-2" href="{{ route('register') }}">Register Now</a></li>
                    </ul>

                    @endif
                   
                </div>  <!-- header content -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</div> <!-- header content -->
</header>

<section id="about" class="about-area pb-130 pt-80">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="about-image mt-50 wow fadeInLeft" data-wow-duration="1s">
                    <img src="assets/images/footballer.png" alt="About">
                </div> <!-- about image -->
            </div>
            <div class="col-lg-6">
                <div class="about-content mt-45 wow fadeInRight" data-wow-duration="1s">
                    <div class="section-title">
                        <h2 class="title">About Our Events</h2>
                    </div> <!-- section title -->

                    <p class="text mt-30">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip. <br> <br> Adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
                    <!-- <p class="date"><span>25<sup>th</sup></span> December’ 19</p> -->
                </div> <!-- about content -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>

<!--====== ABOUT PART ENDS ======-->

<!--====== EVENT SCHEDULE PART START ======-->

<section id="event" class="event-schedule pt-115 pb-130">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-title text-center">
                    <h2 class="title">TOP EVENTS</h2>
                    <p class="text">Lorem ipsum dolor sit amet, in quodsi vulputate pro. Ius illum vocent mediocritatem reiciendis odit sed, vero amet blanditiis cule dicta iriure at phaedrum.</p>
                </div> <!-- section title -->
            </div>
        </div> <!-- row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="event-tab mt-60">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="day-1" role="tabpanel" aria-labelledby="day-1-tab">
                            <div class="event-content pt-40">
                                @if($events->count())

                                    @foreach ($events as $event )
                                    <div class="single-event d-md-flex mt-30">
                                        <div class="event-image">
                                            <img src="{{ $event->image }}" alt="EventImage"  width="320px" height="200px">
                                        </div>
                                        <div class="event-content media-body">
                                            <h4 class="event-title">{{ $event->name }}</h4>
                                            <p class="text">{{ $event->description }}</p>
                                            <ul class="event-meta">
                                                <li>Start: {{$event->start }}</li>
                                                <li>Date: {{ $event->date }}</li>
                                                <li>Location: {{ $event->location }}</li>
                                                <li>Sport: {{$event->sport->name  }}</li>
                                            </ul>
                                        </div>
                                    </div> <!-- single event -->
                                    @endforeach
                                
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

<!--====== EVENT SCHEDULE PART ENDS ======-->

<!--====== FEATURES PART START ======-->


<!--====== FEATURES PART ENDS ======-->

<!--====== TEAM PART START ======-->

<section id="team" class="team-area pt-115 pb-130">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-title text-center pb-20">
                    <h2 class="title">Our Team</h2>
                    <p class="text">Lorem ipsum dolor sit amet, in quodsi vulputate pro. Ius illum vocent mediocritatem reiciendis odit sed, vero amet blanditiis cule dicta iriure at phaedrum.</p>
                </div> <!-- section title -->
            </div>
        </div> <!-- row -->

        <div class="row">
            <div class="col-lg-4 col-sm-6">
                <div class="single-team text-center mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
                    <div class="team-image">
                        <img src="assets/images/92338488_843905686093233_6521113115445815584_n (1).jpg" alt="Team" height="470" width="360">
                    </div>
                    <div class="team-content">
                        <div class="team-social">
                            <ul class="social">
                                <li><a href="#"><i class="lni-facebook-filled"></i></a></li>
                                <li><a href="#"><i class="lni-twitter-original"></i></a></li>
                                <li><a href="#"><i class="lni-linkedin-original"></i></a></li>
                                <li><a href="#"><i class="lni-pinterest"></i></a></li>
                            </ul>
                        </div>
                        <h4 class="team-name"><a href="#">Aleksandar Ivanov</a></h4>
                        <span class="sub-title">Web Developer</span>
                    </div>
                </div> <!-- single team -->
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="single-team text-center mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                    <div class="team-image">
                        <img src="assets/images/mincho.jpg" alt="Team" height="470" width="360">
                    </div>
                    <div class="team-content">
                        <div class="team-social">
                            <ul class="social">
                                <li><a href="#"><i class="lni-facebook-filled"></i></a></li>
                                <li><a href="#"><i class="lni-twitter-original"></i></a></li>
                                <li><a href="#"><i class="lni-linkedin-original"></i></a></li>
                                <li><a href="#"><i class="lni-pinterest"></i></a></li>
                            </ul>
                        </div>
                        <h4 class="team-name"><a href="#">Hristian Dragushkov</a></h4>
                        <span class="sub-title">UX Speacilist</span>
                    </div>
                </div> <!-- single team -->
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="single-team text-center mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="1s">
                    <div class="team-image">
                        <img src="assets/images/svetlio.png" alt="Team" height="470" width="360">
                    </div>
                    <div class="team-content">
                        <div class="team-social">
                            <ul class="social">
                                <li><a href="#"><i class="lni-facebook-filled"></i></a></li>
                                <li><a href="#"><i class="lni-twitter-original"></i></a></li>
                                <li><a href="#"><i class="lni-linkedin-original"></i></a></li>
                                <li><a href="#"><i class="lni-pinterest"></i></a></li>
                            </ul>
                        </div>
                        <h4 class="team-name"><a href="#">Svetoslav Minev</a></h4>
                        <span class="sub-title">UX Speacilist</span>
                    </div>
                </div> <!-- single team -->
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="single-team text-center mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                    <div class="team-image">
                        <img src="assets/images/team-4.jpg" alt="Team">
                    </div>
                    <div class="team-content">
                        <div class="team-social">
                            <ul class="social">
                                <li><a href="#"><i class="lni-facebook-filled"></i></a></li>
                                <li><a href="#"><i class="lni-twitter-original"></i></a></li>
                                <li><a href="#"><i class="lni-linkedin-original"></i></a></li>
                                <li><a href="#"><i class="lni-pinterest"></i></a></li>
                            </ul>
                        </div>
                        <h4 class="team-name"><a href="#">Robert Jhonson</a></h4>
                        <span class="sub-title">UX Speacilist</span>
                    </div>
                </div> <!-- single team -->
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="single-team text-center mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="1s">
                    <div class="team-image">
                        <img src="assets/images/team-5.jpg" alt="Team">
                    </div>
                    <div class="team-content">
                        <div class="team-social">
                            <ul class="social">
                                <li><a href="#"><i class="lni-facebook-filled"></i></a></li>
                                <li><a href="#"><i class="lni-twitter-original"></i></a></li>
                                <li><a href="#"><i class="lni-linkedin-original"></i></a></li>
                                <li><a href="#"><i class="lni-pinterest"></i></a></li>
                            </ul>
                        </div>
                        <h4 class="team-name"><a href="#">Jonathan P Deo</a></h4>
                        <span class="sub-title">UX Speacilist</span>
                    </div>
                </div> <!-- single team -->
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="single-team text-center mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="1.5s">
                    <div class="team-image">
                        <img src="assets/images/team-6.jpg" alt="Team">
                    </div>
                    <div class="team-content">
                        <div class="team-social">
                            <ul class="social">
                                <li><a href="#"><i class="lni-facebook-filled"></i></a></li>
                                <li><a href="#"><i class="lni-twitter-original"></i></a></li>
                                <li><a href="#"><i class="lni-linkedin-original"></i></a></li>
                                <li><a href="#"><i class="lni-pinterest"></i></a></li>
                            </ul>
                        </div>
                        <h4 class="team-name"><a href="#">Steve Jk Jobs</a></h4>
                        <span class="sub-title">UX Speacilist</span>
                    </div>
                </div> <!-- single team -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>

<!--====== TEAM PART ENDS ======-->

<!--====== GALLERY PART START ======-->

<section id="gallery" class="event-gallery pt-115 pb-130 gray-bg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-title text-center pb-50">
                    <h2 class="title">Event Gallery</h2>
                    <p class="text">Lorem ipsum dolor sit amet, in quodsi vulputate pro. Ius illum vocent mediocritatem reiciendis odit sed, vero amet blanditiis cule dicta iriure at phaedrum.</p>
                </div> <!-- section title -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
    <div class="row no-gutters">
        <div class="col-lg-6">
            <div class="single-gallery">
                <div class="gallery-image">
                    <img src="assets/images/volleyball.jpg" alt="Gallery">
                </div>
                <div class="gallery-content">
                    <a class="image-popup" href="assets/images/volleyball.jpg" ><i class="lni-plus"></i></a > 
                </div>
            </div> <!-- single gallery -->
        </div>
        <div class="col-lg-6">
            <div class="row no-gutters">
                <div class="col-sm-6">
                    <div class="single-gallery">
                        <div class="gallery-image">
                            <img src="assets/images/anfield.jpg" alt="Gallery" width="426" height="470">
                        </div>
                        <div class="gallery-content">
                            <a class="image-popup" href="assets/images/anfield.jpg"><i class="lni-plus"></i></a>
                        </div>
                    </div> <!-- single gallery -->
                </div>
                <div class="col-sm-6">
                    <div class="single-gallery">
                        <div class="gallery-image">
                            <img src="assets/images/nba.jpg" alt="Gallery" width="472" height="469">
                        </div>
                        <div class="gallery-content">
                            <a class="image-popup" href="assets/images/nba.jpg"><i class="lni-plus"></i></a>
                        </div>
                    </div> <!-- single gallery -->
                </div>
                <div class="col-sm-6">
                    <div class="single-gallery">
                        <div class="gallery-image">
                            <img src="assets/images/ludogorec.jpg" alt="Gallery">
                        </div>
                        <div class="gallery-content">
                            <a class="image-popup" href="assets/images/ludogorec.jpg"><i class="lni-plus"></i></a>
                        </div>
                    </div> <!-- single gallery -->
                </div>
                <div class="col-sm-6">
                    <div class="single-gallery">
                        <div class="gallery-image">
                            <img src="assets/images/joshua.jpg" alt="Gallery">
                        </div>
                        <div class="gallery-content">
                            <a class="image-popup" href="assets/images/joshua.jpg"><i class="lni-plus"></i></a>
                        </div>
                    </div> <!-- single gallery -->
                </div>
            </div> <!-- row -->
        </div>
    </div> <!-- row -->
    
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
               
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>

<!--====== GALLERY PART ENDS ======-->

<!--====== PRICING PART START ======-->


<!--====== PRICING PART ENDS ======-->

<!--====== CLIENT PART START ======-->

<div id="client" class="client-area pt-115 pb-130 gray-bg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-title text-center pb-50">
                    <h2 class="title">Event Sponsors</h2>
                    <p class="text">Lorem ipsum dolor sit amet, in quodsi vulputate pro. Ius illum vocent mediocritatem reiciendis odit sed, vero amet blanditiis cule dicta iriure at phaedrum.</p>
                </div> <!-- section title -->
            </div>
        </div> <!-- row -->
        <div class="row client-active">
            <div class="col-lg-3">
                <div class="single-client">
                    <img src="assets/images/client-1.png" alt="Client">
                </div> <!-- single client -->
            </div>
            <div class="col-lg-3">
                <div class="single-client">
                    <img src="assets/images/client-2.png" alt="Client">
                </div> <!-- single client -->
            </div>
            <div class="col-lg-3">
                <div class="single-client">
                    <img src="assets/images/client-3.png" alt="Client">
                </div> <!-- single client -->
            </div>
            <div class="col-lg-3">
                <div class="single-client">
                    <img src="assets/images/client-4.png" alt="Client">
                </div> <!-- single client -->
            </div>
            <div class="col-lg-3">
                <div class="single-client">
                    <img src="assets/images/client-5.png" alt="Client">
                </div> <!-- single client -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</div>

<!--====== CLIENT PART ENDS ======-->

<!--====== CONTACT PART START ======-->

<section id="contact" class="contact-area pt-80 pb-130">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="contact-info pt-40">
                    <div class="section-title pb-10">
                        <h2 class="title">Get In Touch</h2>
                    </div> <!-- section title -->
                    <ul>
                        <li>
                            <div class="single-info d-flex mt-25">
                                <div class="info-icon">
                                    <i class="lni-envelope"></i>
                                </div>
                                <div class="info-content media-body">
                                    <h6 class="info-title">Email address</h6>
                                    <p class="text">contact@yourmail.com</p>
                                </div>
                            </div> <!-- single info -->
                        </li>
                        <li>
                            <div class="single-info d-flex mt-25">
                                <div class="info-icon">
                                    <i class="lni-phone-handset"></i>
                                </div>
                                <div class="info-content media-body">
                                    <h6 class="info-title">Phone Number</h6>
                                    <p class="text">+831 546 547</p>
                                </div>
                            </div> <!-- single info -->
                        </li>
                        <li>
                            <div class="single-info d-flex mt-25">
                                <div class="info-icon">
                                    <i class="lni-money-location"></i>
                                </div>
                                <div class="info-content media-body">
                                    <h6 class="info-title">Location</h6>
                                    <p class="text">Cesare Rosaroll, 118 80139 Eventine</p>
                                </div>
                            </div> <!-- single info -->
                        </li>
                    </ul>
                </div> <!-- contact info -->
            </div>
            <div class="col-lg-8">
                <div class="contact-form pt-20">
                    <form id="contact-form" action="assets/contact.php" method="post">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="single-form">
                                    <input type="text" name="name" placeholder="Your Name">
                                    <i class="lni-user"></i>
                                </div> <!-- single form -->
                            </div>
                            <div class="col-md-6">
                                <div class="single-form">
                                    <input type="email" name="email" placeholder="Your Email">
                                    <i class="lni-envelope"></i>
                                </div> <!-- single form -->
                            </div>
                            <div class="col-md-6">
                                <div class="single-form">
                                    <input type="text" name="subject" placeholder="Your Subject">
                                    <i class="lni-pencil-alt"></i>
                                </div> <!-- single form -->
                            </div>
                            <div class="col-md-6">
                                <div class="single-form">
                                    <input type="text" name="number" placeholder="Phone Number">
                                    <i class="lni-phone-handset"></i>
                                </div> <!-- single form -->
                            </div>
                            <div class="col-md-12">
                                <div class="single-form">
                                    <textarea name="message" placeholder="Your Message"></textarea>
                                    <i class="lni-comment-alt"></i>
                                </div> <!-- single form -->
                            </div>
                            <p class="form-message"></p>
                            <div class="col-md-12">
                                <div class="single-form">
                                    <button type="submit" class="main-btn main-btn-2">Send Message</button>
                                </div> <!-- single form -->
                            </div>
                        </div> <!-- row -->
                    </form>
                </div> <!-- contact form -->
            </div>
        </div> <!-- row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="contact-map pt-130">
                    <div class="gmap_canvas">                            
                        <iframe id="gmap_canvas" src="https://maps.google.com/maps?q=Mission%20District%2C%20San%20Francisco%2C%20CA%2C%20USA&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                    </div>
                </div> <!-- contact map -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>


@endsection