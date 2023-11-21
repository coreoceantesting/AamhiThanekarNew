@extends('common.layout')

@section('content')
 
{{-- main banner section start --}}
	<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="{{ asset('images/banner.jpg') }}" class="d-block w-100" alt="bgimage">
				<div class="centered">
					<h1 class="text-white" style="text-align: center">Join to bring the change !! <br>

					Citizens make cities !!</h1>
					<br><p class="text-white" style="text-align: center"><small>It’s about time we did something about things that matter Work for change

						Stand up for a better tomorrow.</small></p><br><br>
						{{-- <p style="text-align: center"> <a href="https://www.youtube.com/watch?v=jcTRwEJsfJU" class="btn btn-primary"><i class="fa fa-play" aria-hidden="true"></i> Watch Video</a></p> --}}
						<div class="Mycontainer">
							<a class="play-btn" href="https://drive.google.com/file/d/174n2xh7Hb_OfALGRSP5sDZ9TE0DQ6g48/view"></a>
							<p><h1 class="text-white">Watch Video</h1></p>
						</div>
				</div>
			</div>
		</div>
  	</div>
{{-- main banner section end --}}
	
{{-- Cards Section Start--}}

	<div class="container" style="margin-top: -160px; z-index: 9999;position: relative;">
		<div class="row text-center">
	
			<!-- Team item -->
			<div class="col-xl-3 col-sm-6 mb-5 card-container">
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
			<div class="col-xl-3 col-sm-6 mb-5 card-container">
				<div class="bg-white rounded shadow-sm py-5 px-4 card-content" ><img src="{{ asset('images/water-pollution.png') }}" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
					<h5 class="mb-0"><strong>Waste Segregation</strong></h5> <br>
					<p>Waste segregation is the sorting and separation of waste types to facilitate recycling and correct onward disposal. When waste is sorted correctly, it can save your company money. Waste segregation should be based on: The type of waste.</p>
					
				</div>
				<div class="c-footer">
					<button class="btn btn-danger">Read More</button>
				</div>
			</div><!-- End -->
	
			<!-- Team item -->
			<div class="col-xl-6 col-sm-6 mb-5 " >
				<div class="card-group" style="height: 530px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19) !important;
			">
					<div class="card text-white" style="background-color: #D7382E">
					  <div class="card-body" style="padding-top:40%">
						<h5 class="card-title mb-4"><i class='fas fa-hand-holding-usd' style='font-size:55px'></i></h5>
						<h5 class="mb-0"><strong>Donate</strong></h5> <br>
						<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
						<p class="card-text"><button class="btn btn-dark text-white">Read More</button></p>
					  </div>
					</div>
					<div class="card">
					  <div class="card-body" style="padding:0px 0px !important;">
						<img src="{{ asset('images/donate.jpg') }}" style="object-fit: cover" alt="donate" height="100%" width="100%">
					  </div> 
					</div>
				</div>
			</div><!-- End -->
	
		</div>
	</div>

{{-- Cards Section End --}}

<br>

<div class="line"></div>
	<div class="name">
		<strong>EXPLAINERS</strong>
	</div>
<div class="line"></div>

{{-- blogs section start --}}
<div class="container">
	<div class="row row-cols-1 row-cols-md-3 g-4">
		<div class="col">
		  <div class="card h-100">
			<img src="{{ asset('images/sakhinew.png') }}" class="card-img-top" alt="...">
			<div class="card-body">
			  <h5 class="card-title"><a href="#"><strong>Menstrual Educator (Sakhi)</strong></a></h5>
			  <p class="card-text">The Chief Minister's Menstrual Hygiene Scheme was launched on December 15, 2022. The scheme is implemented in all 16 districts to increase awareness of menstrual hygiene in school-going adolescent girls.</p>
			</div>
			<div class="card-footer">
			  <small class="text-muted">November 21, 2023</small>
			</div>
		  </div>
		</div>
		<div class="col">
		  <div class="card h-100">
			<img src="{{ asset('images/waste.jpg') }}" class="card-img-top" alt="...">
			<div class="card-body">
			  <h5 class="card-title"><a href="#"><strong>3-Level Waste Segregation</strong></a></h5>
			  <p class="card-text">Waste segregation is the sorting and separation of waste types to facilitate recycling and correct onward disposal. When waste is sorted correctly, it can save your company money. Waste segregation should be based on: The type of waste.</p>
			</div>
			<div class="card-footer">
			  <small class="text-muted">November 21, 2023</small>
			</div>
		  </div>
		</div>
		<div class="col">
		  <div class="card h-100">
			<img src="{{ asset('images/thane.jpg') }}" class="card-img-top" alt="...">
			<div class="card-body">
			  <h5 class="card-title"><a href="#"><strong>Thane City</strong></a></h5>
			  <p class="card-text">hane city generates close to 9 metric tons of waste every day which currently
				goes to landfill. Hence it needs to be addressed on a war footing. Steps towards
				waste reduction, waste segregation, and collection of segregated waste for safe
				disposal need to be implemented. For this to happen, all Thanekars  will need
				to participate along with the Municipal Corporation.</p>
			</div>
			<div class="card-footer">
			  <small class="text-muted">November 21, 2023</small>
			</div>
		  </div>
		</div>
		<div class="col">
			<div class="card h-100">
				<img src="{{ asset('images/joinus.jpg') }}" class="card-img-top" alt="...">
				<div class="card-body">
				<h5 class="card-title"><a href="#"><strong>Know Your Plastic </strong></a></h5>
				<p class="card-text">Plastic waste, also known as plastic pollution, is the accumulation of plastic objects in the environment. This includes plastic bottles, bags, food wrappers, and more.</p>
				</div>
				<div class="card-footer">
				<small class="text-muted">November 21, 2023</small>
				</div>
			</div>
		</div>
	</div>
</div>
{{-- blogs section end --}}

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