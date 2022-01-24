@extends('layouts.master2')

@section('konten')
    <!-- hero area -->
	<div class="hero-area hero-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-9 offset-lg-2 text-center">
					<div class="hero-text">
						<div class="hero-text-tablecell">
							<p class="subtitle">Balitjestro</p>
							<h1>VARIETAS BUAH</h1>
							<div class="hero-btns">
								<a href="/datavarietas" class="boxed-btn">Data Varietas</a>
								@can('user-display')
								<a href="/rekomendasi" class="bordered-btn">Pencarian</a>
								@endcan
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end hero area -->

    @endsection