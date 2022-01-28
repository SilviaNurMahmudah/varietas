@extends('layouts.master2')

@section('konten')
<!-- products -->
	<div class="product-section mt-150 mb-150">
		<div class="container">
			<div class="row product-lists">		
				@foreach($varietas as $v)
				<div class="col-lg-4 col-md-6 text-center">
					<div class="single-product-item">
						<div class="product-image">
							<a href="single-product.html"><img src="{{asset('storage/'.$v->imageUrl)}}" alt=""></a>
						</div>
						<h3>{{$v->varietas}}</h3>
						<a href="/datavarietas-{{$v->id}}" class="cart-btn"><i class="fas fa-eye"></i> Detail</a>
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</div>
	<!-- end products -->
@endsection