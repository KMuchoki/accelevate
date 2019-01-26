@extends('layouts.bootstrap')

@section('content')
	<div class="container-fluid">
		@if(count($events))
			<div class="row">
				<div id="item-carousel" class="carousel slide" data-ride="carousel">
					<!-- Indicators -->
					<ol class="carousel-indicators">
						

						@for($cnt = 0; $cnt < count($events); $cnt++)
							
							<li data-target="#item-carousel" data-slide-to="{{ $cnt }}" class="{{ $cnt == 0 ? 'active' : '' }}"></li>
							
						@endfor
						
						
					</ol>

					<!-- Wrapper for slides -->
					<div class="carousel-inner" role="listbox">
						@php
							$cnt = 0;
						@endphp

						@foreach($events as $event)
							<div class="item{{ $cnt == 0 ? ' active' : '' }}">
								<img src="{{ $event->image() }}" alt="{{ $event->name }}">
								
								<div class="carousel-caption">
						        	<h4>{{ $event->name }}</h4>
						        	<h5>{{ $event->date }}</h5>
						        	<p>{{ $event->description }}</p>
						      	</div>
							</div>

							@php
								$cnt++;
							@endphp
						@endforeach

					</div>

					<!-- Controls -->
					<a class="left carousel-control" href="#item-carousel" role="button" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left fa fa-arrow-left" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					
					<a class="right carousel-control" href="#item-carousel" role="button" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right fa fa-arrow-right" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>	
			</div>
			
		@else
			<div class="row banner-image fullscreen text-center">
				<div class="centered col-sm-6">
					<img src="{{ asset('img/logo-large-light.png') }}" alt="" class="img-responsive mb-50">
					
					
						<a href="{{ route('register') }}" class="btn btn-lg btn-primary" style="margin-right:20px"><i class="fa fa-user"></i> Register</a>
						<a href="{{ route('login') }}" class="btn btn-lg btn-success"><i class="fa fa-sign-in"></i> Login</a>
					
					

				</div>
			</div>
		@endif
	</div>

	<div class="container">
		<div class="row text-center py-50">
			<div class="col-sm-10 col-sm-offset-1">
				<h3>What we do</h3>
				<p>Accelevate Leads organizes experiential skills training programs where students get to interact with personnel from various companies and organizations. Through partnerships with companies, we organize Skills Hunt Summits, Skills hunt competition, Mentorships, Internships which serve as information platforms for students on soft and hard skills. </p>
				<p>We have created a space for an initiative that exposes Final Year students and Graduates to Relevant skills the job market needs and by the employers. Furthermore, students are also given an opportunity to be exposed to career paths that they studied in turn they are able to decide which career path suits their desire and we encourage them to pursue them.</p>
			</div>
		</div>
	</div>

	<div class="container-fluid">
		<div class="row orange-bg">
			<div class="container">
				<div class="row py-50">
					<div class="col-sm-10 col-sm-offset-1">
						<h3>Who we are</h3>
					<p>
						We are a skill development firm whose core objective is to bridge the gap between the job market demands and the school curriculum. We create economic mobility for the unemployed by encouraging students in institutions of higher learning to get skills and take available opportunities. Accelevate Leads Limited was founded in 2014 by Ms. Viridiana Wasike. It was established to address the graduate unemployment menace.


					</p>

					<p>
						We believe the skills hunt program has and continues to be an amazing platform for students and graduates. It provides exposure to challenges that aim to sharpen soft skills which makes up 80% of any job requirement. 
					</p>
					</div>
					

				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row py-50">
			<div class="col-sm-10 col-sm-offset-1">
				<h3>What sets us apart?</h3>
				<p>
					Unlike most training programs which focus on academic training, skills hunt is unique as it offers skills training at <strong>no cost</strong>. The <strong>flexibility</strong> offered to the student allows for a physical commitment once in a month. It gives students an <strong>opportunity to interact directly with employers</strong> and this places students at an advantaged position in terms of securing themselves job opportunities. Students are given a <strong>platform to solve real life challenges</strong> faced by different companies, it sharpens their analytical as well as problem solving skills. 
				</p>

				<p>
					The full year program assesses the 4C’s of the 21st Century workplace that are highly demanded in the market but rarely found. They include Conviction, Commitment, Consistency and Continuity. This makes them an excellent fit for the job market.
					
					The 4.0 Capital of the 21st Century Workplace

				</p>

				<p>
					<strong>Conviction</strong> – Skills (great skill) reveal passion, talent, innovation, courage, give access and elevates one to continuously lead
				</p>

				<p>
					What is the definition of Skill? (businessdictionary.com) <br>
					
					“An <strong>ability</strong> and capacity acquired through deliberate, systematic, and sustained effort to smoothly and adaptively carryout complex activities or job functions involving ideas (cognitive <strong>skills</strong>), things (technical <strong>skills</strong>), and/or people (interpersonal <strong>skills</strong>).”

				</p>

				<p>
					<strong>Commitment</strong> – You do what is best, learn rapidly and eagerly, challenge prevailing assumptions and inspire others with your thirst for excellence
				</p>

				<p>
					<strong>Continuity</strong> – You make wise decisions, listen to identify root causes, concise and articulate in speech and writing and you treat people with respect while reaching out to help someone
				</p>

				<p>
					<strong>Consistency</strong> – Integrity and Impact! You can be relied upon, you accomplish amazing work and go beyond what is expected celebrating wins along the way <br>
					
					We hire and help you hire graduates who demonstrate the 4.0 Capital

				</p>
				
			</div>
		</div>
	</div>

	<div class="container-fluid">
		<div class="row orange-bg">
			<div class="container">
				<div class="row py-50">
					<div class="col-sm-10 col-sm-offset-1">
						<h3>Problem Statement </h3>

						<p>
							Over the years students complete their higher education from various institutions expecting to be absorbed into the job market where they would apply the knowledge gained from class. However, many have had their applications rejected and their dreams shattered causing them to organize demos so as to express their dissatisfaction with the employers. 
						</p>	

						<p>
							On the other hand the employers have shielded themselves from these sentiments citing that many students graduating from institutions of higher learning only have the knowledge disseminated in class but lack the industrial acumen and the valuable skills employers are sorting after hence the narrative that the 8-4-4 students are ‘half-baked’. 
						</p>

						<p>
							Skills hunt is filling the gap as an active information centre for university students and graduates to provide adequate access to skills needed in the market.
						</p>
					</div>

					
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row py-50">
			<div class="col-sm-10 col-sm-offset-1">
				<h3>Partnerships </h3>

				<p>
					We have partnered with quite the number of organizations in addressing Skills Development needed in the job market by collaborating/partnering with various companies and organizations in solving the problem of graduate unemployment. Our partners are: One Acre Fund, Centum, Questworks, Moringa School, Telkom, Safaricom, IBM, Microsoft, Kenya Medical Research Institute (KEMRI), among others.   (Insert logos for the mentioned organizations).
				</p>
				
				
			</div>
		</div>
	</div>
	
	<div class="container-fluid">
		<div class="row orange-bg">
			<div class="container">
				<div class="row py-50">
					<div class="col-sm-10 col-sm-offset-1">
						<h3 class="">Methodology </h3>	
						<p>
							We take raw talent and hone it into outstanding performance through marketplace challenges. The triple accountability (Company, AL and University) ensures that the students give their best. (Please check on the document for skills hunt expo)
						</p>
					</div>

				</div>
			</div>
		</div>
	</div>

	{{-- <div class="container-fluid">
		<div class="row orange-bg">
			<div class="container">
				<div class="row py-50 text-center">
					<div class="col-sm-12">
						<h3 class="mb-50">Lorem</h3>	
					</div>

					
					<div class="col-sm-3">
						<i class="fa fa-line-chart rem-8 mb-30"></i> <br>
						<h4>Lorem</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis dignissimos delectus quisquam architecto asperiores praesentium quas similique</p>
					</div>

					<div class="col-sm-3">
						<i class="fa fa-users rem-8 mb-30"></i> <br>
						<h4>Lorem</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis dignissimos delectus quisquam architecto asperiores praesentium quas similique</p>
					</div>

					<div class="col-sm-3">
						<i class="fa fa-code rem-8 mb-30"></i> <br>
						<h4>Lorem</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis dignissimos delectus quisquam architecto asperiores praesentium quas similique</p>
					</div>

					<div class="col-sm-3">
						<i class="fa fa-cogs rem-8 mb-30"></i> <br>
						<h4>Lorem</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis dignissimos delectus quisquam architecto asperiores praesentium quas similique</p>
					</div>
				</div>
			</div>
		</div>
	</div> --}}

	{{-- <div class="container">
		<div class="row py-50">
			<div class="col-md-12 homeport1">
				<div class="col-md-4 col-sm-12 col-xs-12 portfolio-item">
					<figure class="effect-oscar">
						<img src="images/blog1.jpg" alt="img09" class="img-responsive">
						<figcaption>
							<h2>Lorem Ipsum</h2>
							<a href="#">View more</a>
						</figcaption>           
					</figure>
					<p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Lorem ipsum dolor sit amet.</p>
					<div class="text-center"><a class="btn btn-primary btn-noborder-radius hvr-bounce-to-bottom">Read More</a></div>
				</div>
				<div class="col-md-4 col-sm-12 col-xs-12 portfolio-item">
					<figure class="effect-oscar">
						<img src="images/blog2.jpg" alt="img09" class="img-responsive">
						<figcaption>
							<h2>Lorem Ipsum</h2>
							<a href="#">View more</a>
						</figcaption>           
					</figure>
					<p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Lorem ipsum dolor sit amet.</p>
					<div class="text-center"><a class="btn btn-primary btn-noborder-radius hvr-bounce-to-bottom">Read More</a></div>
				</div>
				<div class="col-md-4 col-sm-12 col-xs-12 portfolio-item">
					<figure class="effect-oscar">
						<img src="images/blog3.jpg" alt="img09" class="img-responsive">
						<figcaption>
							<h2>Lorem Ipsum</h2>
							<a href="#">View more</a>
						</figcaption>           
					</figure>
					<p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Lorem ipsum dolor sit amet.</p>
					<div class="text-center"><a class="btn btn-primary btn-noborder-radius hvr-bounce-to-bottom">Read More</a></div>
				</div>
			</div>
		</div>
	</div> --}}

	<section id="contact">
		<div class="container"> 
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<div class="row">
						<div class="col-lg-12">
						<div class="color-elements">
						<h2>Contact Us</h2><br>
						</div>
					</div>
					<div class="col-lg-6 col-md-8">
						<form class="inline" id="contactForm" method="post">
							<div class="row">
								<div class="col-sm-6 height-contact-element">
									<div class="form-group">
										<input type="text" name="first_name" class="form-control custom-labels" id="name" placeholder="FULL NAME" required="" data-validation-required-message="Please write your name!">
										<p class="help-block text-danger"></p>
									</div>
								</div>
								<div class="col-sm-6 height-contact-element">
									<div class="form-group">
										<input type="email" name="email" class="form-control custom-labels" id="email" placeholder="EMAIL" required="" data-validation-required-message="Please write your email!">
										<p class="help-block text-danger"></p>
									</div>
								</div>
								<div class="col-sm-12 height-contact-element">
									<div class="form-group">
										<input type="text" name="message" class="form-control custom-labels" id="message" placeholder="WHAT'S ON YOUR MIND" required="" data-validation-required-message="Please write a message!">
									</div>
								</div>
								<div class="col-sm-3 col-xs-6 height-contact-element">
									<div class="form-group">
										<input type="submit" class="btn btn-md btn-custom btn-noborder-radius" value="Send It">
									</div>
								</div>
								<div class="col-sm-3 col-xs-6 height-contact-element">
									<div class="form-group">
										<button type="button" class="btn btn-md btn-noborder-radius btn-custom" name="reset">RESET
										</button>
									</div>
								</div>
								<div class="col-sm-3 col-xs-6 height-contact-element">
									<div class="form-group">
										<div id="response_holder"></div>
									</div>
								</div>
								<div class="col-sm-12 contact-msg">
								<div id="success"></div>
								</div>
							</div>
						</form>
					</div>
					<div class="col-lg-5 col-md-3 col-lg-offset-1 col-md-offset-1">
						<div class="row">
							<div class="col-md-12 height-contact-element">
								<div class="form-group">
									<i class="fa fa-2x fa-map-marker"></i>
									<span class="text">LOCATION</span>
								</div>
							</div>
							<div class="col-md-12 height-contact-element">
								<div class="form-group">
									<i class="fa fa-2x fa-phone"></i>
									<span class="text">012 345678</span>
								 </div>
							 </div>
							<div class="col-md-12 height-contact-element">    
								<div class="form-group">
									<i class="fa fa-2x fa-envelope"></i>
									<span class="text">hello@accelevate.com</span>
								</div>
							</div>
						</div>
					</div>	
					</div>
					
				</div>
			</div>
		</div>
	</section>


	
@endsection