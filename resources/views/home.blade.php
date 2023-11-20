@extends('common.layout')

@section('content')
 
	<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="{{ asset('images/joinus.jpg') }}" class="d-block w-100" alt="bgimage">
			</div>
		</div>
  	</div>
 
    
@endsection

@push('js')

@endpush