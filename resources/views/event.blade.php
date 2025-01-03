@extends('layouts.app')

@section('content')
<!-- START SECTION TOP -->
<section class="section-top">
	<div class="container">
		<div class="col-lg-10 offset-lg-1 text-center">
			<div class="section-top-title wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
				<h1>All Event</h1>
				<ul>
					<li><a href="{{ route('home') }}">Home</a></li>
					<li> / Event</li>
				</ul>
			</div><!-- //.HERO-TEXT -->
		</div><!--- END COL -->
	</div><!--- END CONTAINER -->
</section>	
<!-- END SECTION TOP -->

<!-- START EVENT -->
<section class="our-event section-padding">
	<div class="container">
		<div class="section-title">
			<h2>Upcoming Events</h2>
			<p>Join With Us <span><u>Our Events</u></span></p>
		</div>				
		<div class="row">				
			<div class="col-lg-4 col-sm-6 col-xs-12">
				<div class="event-slide">
					<div class="event-img">
						<img src="assets/images/event/e1.png" alt="">
						<div class="event-date">
							<span class="date">20</span>
							<span class="month">Oct</span>
						</div>
					</div>
					<div class="event-content">
						<h3><a href="event_single">Electrical Engineering of Batparder new event</a></h3>
						<span><i class="fa fa-clock-o"></i>10.00AM - 12.00PM</span>
						<span><i class="fa fa-table"></i><strong>At Penn School</strong></span>
						<p>Lorem ipsum dolor sit amet magna consectetur adipisicing elit.</p>
					</div>
				</div><!-- END EVENT -->
			</div><!-- END COL -->	
			<div class="col-lg-4 col-sm-6 col-xs-12">
				<div class="event-slide">
					<div class="event-img">
						<img src="assets/images/event/e2.png" alt="">
						<div class="event-date">
							<span class="date">22</span>
							<span class="month">Oct</span>
						</div>
					</div>
					<div class="event-content">
						<h3><a href="event_single">Architecture Design of International Art Fair 2023</a></h3>
						<span><i class="fa fa-clock-o"></i>10.00AM - 12.00PM</span>
						<span><i class="fa fa-table"></i><strong>At Penn School</strong></span>
						<p>Lorem ipsum dolor sit amet magna consectetur adipisicing elit.</p>
					</div>
				</div><!-- END EVENT -->
			</div><!-- END COL -->	
			<div class="col-lg-4 col-sm-6 col-xs-12">
				<div class="event-slide">
					<div class="event-img">
						<img src="assets/images/event/e3.png" alt="">
						<div class="event-date">
							<span class="date">22</span>
							<span class="month">Oct</span>
						</div>
					</div>
					<div class="event-content">
						<h3><a href="event_single">Architecture Design of International Art Fair 2023</a></h3>
						<span><i class="fa fa-clock-o"></i>10.00AM - 12.00PM</span>
						<span><i class="fa fa-table"></i><strong>At Penn School</strong></span>
						<p>Lorem ipsum dolor sit amet magna consectetur adipisicing elit.</p>
					</div>
				</div><!-- END EVENT -->
			</div><!-- END COL -->	
			<div class="col-lg-4 col-sm-6 col-xs-12">
				<div class="event-slide es">
					<div class="ed_mb">
						<span class="date">26</span>
						<span class="month">Oct</span>
					</div>							
					<div class="event-content ec_pd">
						<h3><a href="event_single">Chiter astana event</a></h3>
						<span><i class="fa fa-clock-o"></i>10.00AM - 12.00PM</span>
						<span><i class="fa fa-table"></i><strong>At Penn School</strong></span>
						<p>Lorem ipsum dolor sit amet magna consectetur adipisicing elit.</p>
					</div>
				</div><!-- END EVENT -->
				<div class="event-slide es">
					<div class="ed_mb">
						<span class="date">29</span>
						<span class="month">Oct</span>
					</div>	
					<div class="event-content ec_pd">						
						<h3><a href="event_single">Dasel Bhai Program</a></h3>
						<span><i class="fa fa-clock-o"></i>10.00AM - 12.00PM</span>
						<span><i class="fa fa-table"></i><strong>At Penn School</strong></span>
						<p>Lorem ipsum dolor sit amet magna consectetur adipisicing elit.</p>							
					</div>
				</div><!-- END EVENT -->	
			</div><!-- END COL -->
			<div class="col-lg-4 col-sm-6 col-xs-12">
				<div class="event-slide es">
					<div class="ed_mb">
						<span class="date">26</span>
						<span class="month">Oct</span>
					</div>							
					<div class="event-content ec_pd">
						<h3><a href="event_single">Chiter astana event</a></h3>
						<span><i class="fa fa-clock-o"></i>10.00AM - 12.00PM</span>
						<span><i class="fa fa-table"></i><strong>At Penn School</strong></span>
						<p>Lorem ipsum dolor sit amet magna consectetur adipisicing elit.</p>
					</div>
				</div><!-- END EVENT -->
				<div class="event-slide es">
					<div class="ed_mb">
						<span class="date">29</span>
						<span class="month">Oct</span>
					</div>	
					<div class="event-content ec_pd">						
						<h3><a href="event_single">Dasel Bhai Program</a></h3>
						<span><i class="fa fa-clock-o"></i>10.00AM - 12.00PM</span>
						<span><i class="fa fa-table"></i><strong>At Penn School</strong></span>
						<p>Lorem ipsum dolor sit amet magna consectetur adipisicing elit.</p>							
					</div>
				</div><!-- END EVENT -->	
			</div><!-- END COL -->	
			<div class="col-lg-4 col-sm-6 col-xs-12">
				<div class="event-slide">
					<div class="event-img">
						<img src="assets/images/event/e4.png" alt="">
						<div class="event-date">
							<span class="date">20</span>
							<span class="month">Oct</span>
						</div>
					</div>
					<div class="event-content">
						<h3><a href="event_single">Electrical Engineering of Batparder new event</a></h3>
						<span><i class="fa fa-clock-o"></i>10.00AM - 12.00PM</span>
						<span><i class="fa fa-table"></i><strong>At Penn School</strong></span>
						<p>Lorem ipsum dolor sit amet magna consectetur adipisicing elit.</p>
					</div>
				</div><!-- END EVENT -->
			</div><!-- END COL -->	
			<div class="col-lg-4 col-sm-6 col-xs-12">
				<div class="event-slide">
					<div class="event-img">
						<img src="assets/images/event/e5.png" alt="">
						<div class="event-date">
							<span class="date">22</span>
							<span class="month">Oct</span>
						</div>
					</div>
					<div class="event-content">
						<h3><a href="event_single">Architecture Design of International Art Fair 2023</a></h3>
						<span><i class="fa fa-clock-o"></i>10.00AM - 12.00PM</span>
						<span><i class="fa fa-table"></i><strong>At Penn School</strong></span>
						<p>Lorem ipsum dolor sit amet magna consectetur adipisicing elit.</p>
					</div>
				</div><!-- END EVENT -->
			</div><!-- END COL -->
			<div class="col-lg-4 col-sm-6 col-xs-12">
				<div class="event-slide">
					<div class="event-img">
						<img src="assets/images/event/e6.png" alt="">
						<div class="event-date">
							<span class="date">22</span>
							<span class="month">Oct</span>
						</div>
					</div>
					<div class="event-content">
						<h3><a href="event_single">Architecture Design of International Art Fair 2023</a></h3>
						<span><i class="fa fa-clock-o"></i>10.00AM - 12.00PM</span>
						<span><i class="fa fa-table"></i><strong>At Penn School</strong></span>
						<p>Lorem ipsum dolor sit amet magna consectetur adipisicing elit.</p>
					</div>
				</div><!-- END EVENT -->
			</div><!-- END COL -->				
		</div><!-- END ROW -->
	</div><!-- END CONTAINER -->			
</section>
<!-- END EVENT -->	
@endsection