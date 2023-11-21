@extends('common.layout')

@section('content')
 
	<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="{{ asset('images/joinus.jpg') }}" class="d-block w-100" alt="bgimage">
			</div>
		</div>
  	</div>
	
	{{-- Cards Section Start--}}

	<div class="container" style="margin-top: -65px; z-index: 9999;position: relative;">
		<div class="row text-center">
	
			<!-- Team item -->
			<div class="col-xl-4 col-sm-6 mb-5 card-container">
				<div class="bg-white rounded shadow-sm py-5 px-4 card-content"><img src="{{ asset('images/plastic.png') }}" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
					<h5 class="mb-0"><strong>Know Your Plastic</strong></h5> <br>
					<p>
						Plastic waste, also known as plastic pollution, is the accumulation of plastic objects in the environment. This includes plastic bottles, bags, food wrappers, and more.
					</p>
					
				</div>
				<div class="c-footer">
					<button class="btn btn-danger">Read More</button>
				</div>
			</div><!-- End -->
	
			<!-- Team item -->
			<div class="col-xl-4 col-sm-6 mb-5 card-container">
				<div class="bg-white rounded shadow-sm py-5 px-4 card-content" ><img src="{{ asset('images/water-pollution.png') }}" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
					<h5 class="mb-0"><strong>Waste Segregation</strong></h5> <br>
					<p>Waste segregation is the sorting and separation of waste types to facilitate recycling and correct onward disposal. When waste is sorted correctly, it can save your company money. Waste segregation should be based on: The type of waste.</p>
					
				</div>
				<div class="c-footer">
					<button class="btn btn-danger">Read More</button>
				</div>
			</div><!-- End -->
	
			<!-- Team item -->
			<div class="col-xl-4 col-sm-6 mb-5 card-container" >
				<div class="bg-white rounded shadow-sm py-5 px-4 card-content" ><img src="{{ asset('images/sakhi.png') }}" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
					<h5 class="mb-0"><strong>Menstrual Educator (Sakhi)</strong></h5> <br>
					<p>We are proud of our educators for raising menstrual awareness in the community & ensuring a period positive future for everyone !</p>
					
				</div>
				
				<div class="c-footer">
					<button class="btn btn-danger">Read More</button>
				</div>
			</div><!-- End -->
	
		</div>
	</div>

	{{-- Cards Section End --}}

	<br>

	{{-- Our Partner Section Start --}}

	<div class="slider">
		<div class="text-center">
			<h4 class="text-white">Our Partner</h4>
			<h1 class="text-white">Institutional & Initiative Partners</h1>
		</div>
		<br><br>
		<div class="slide-track">
			<div class="slide">
			<img src="https://cdn.freebiesupply.com/logos/thumbs/2x/mcdonalds-black-logo.png" alt="">
			</div>
			<div class="slide">
			<img src="https://cdn.freebiesupply.com/images/large/2x/starbucks-logo-black-and-white.png" alt="">
			</div>
			<div class="slide">
			<img src="https://cdn.freebiesupply.com/logos/large/2x/general-electric-black-logo-png-transparent.png" alt="">
			</div>
			<div class="slide">
			<img src="https://cdn.freebiesupply.com/logos/large/2x/nfl-logo-png-transparent.png" alt="">
			</div>
			<div class="slide">
			<img src="https://cdn.freebiesupply.com/logos/large/2x/mercedes-benz-6-logo-png-transparent.png" alt="">
			</div>
			<div class="slide">
			<img src="https://cdn.freebiesupply.com/logos/large/2x/hogwarts-logo-png-transparent.png" alt="">
			</div>
			<div class="slide">
			<img src="https://cdn.freebiesupply.com/logos/thumbs/2x/mcdonalds-black-logo.png" alt="">
			</div>
			<div class="slide">
			<img src="https://cdn.freebiesupply.com/images/large/2x/starbucks-logo-black-and-white.png" alt="">
			</div>
			<div class="slide">
			<img src="https://cdn.freebiesupply.com/logos/large/2x/general-electric-black-logo-png-transparent.png" alt="">
			</div>
			<div class="slide">
			<img src="https://cdn.freebiesupply.com/logos/large/2x/nfl-logo-png-transparent.png" alt="">
			</div>
			<div class="slide">
			<img src="https://cdn.freebiesupply.com/logos/large/2x/mercedes-benz-6-logo-png-transparent.png" alt="">
			</div>
			<div class="slide">
			<img src="https://cdn.freebiesupply.com/logos/large/2x/hogwarts-logo-png-transparent.png" alt="">
			</div>
			<div class="slide">
			<img src="https://cdn.freebiesupply.com/logos/thumbs/2x/mcdonalds-black-logo.png" alt="">
			</div>
			<div class="slide">
			<img src="https://cdn.freebiesupply.com/images/large/2x/starbucks-logo-black-and-white.png" alt="">
			</div>
			<div class="slide">
			<img src="https://cdn.freebiesupply.com/logos/large/2x/general-electric-black-logo-png-transparent.png" alt="">
			</div>
			<div class="slide">
			<img src="https://cdn.freebiesupply.com/logos/large/2x/nfl-logo-png-transparent.png" alt="">
			</div>
			<div class="slide">
			<img src="https://cdn.freebiesupply.com/logos/large/2x/mercedes-benz-6-logo-png-transparent.png" alt="">
			</div>
			<div class="slide">
			<img src="https://cdn.freebiesupply.com/logos/large/2x/hogwarts-logo-png-transparent.png" alt="">
			</div>
		</div>
	</div>
	
	{{-- Our Partner Section End --}}

	<br><br><br><br>

	{{-- Contact Us Section Start --}}

	<div class="container" >
		<div class="row">
			<div class="col-md-6 col-sm-6" style="padding: 10px;">
				<form>
					<div class="mb-3">
						{{-- <label for="exampleInputEmail1" class="form-label">Email address</label> --}}
						<input type="text" class="form-control" id="name" aria-describedby="name" placeholder="Name" required>
					</div>
					<div class="mb-3">
					{{-- <label for="exampleInputEmail1" class="form-label">Email address</label> --}}
					<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
					</div>
					<div class="mb-3">
					<textarea name="message" id="" cols="10" rows="5" class="form-control" placeholder="message"></textarea>
					</div>
					<button type="submit" class="btn btn-danger form-control">Send</button>
				</form>
			</div>
			<div class="col-md-6 col-sm-6" style="padding: 10px;">
				<h4><strong class="text-danger">Help Us</strong></h4>
				<p><h2><strong>Your Donation Can Change Someone’s Life</strong></h2></p>
				<p><strong><i class="fa fa-envelope" style="color:red" aria-hidden="true"></i> Email:</strong> info@aamhithanekar.com</p>
				<p><strong><i class="fa fa-phone" style="color: red" aria-hidden="true"></i> Phone:</strong> +91 8484848484</p>
				<p><strong><i class="fa fa-address-card" style="color: red" aria-hidden="true"></i> Address:</strong> Mumbai</p>
				<p>Keeping this in mind and with a view of increasing citizens participation, citizens
					from diverse fields have joined hands for making Thane the best livable city.</p>

			</div>
		</div>
	</div>
	{{-- Contact Us Section End --}}
	<br>
    
@endsection

@push('js')

@endpush