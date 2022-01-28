@extends('layouts.master2')

@section('konten')

<div class="hero-area hero-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-9 offset-lg-2 text-center">
					<div class="hero-text">
						<div class="hero-text-tablecell">
							<p class="subtitle">Varietas Buah</p>
							<h1>Masukkan Ketinggian Daerahmu </h1>
							<div class="search-bar">
						        <div class="search-bar-tablecell">
							        <form action="/varietas-rekomendasi" method="GET">
								        <input type="text" name="cari" placeholder="disini.." value="{{ old('rekomendasi') }}">
								        <button type="submit">Search <i class="fas fa-search"></i></button>
							        </form>
						        </div>
					        </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection