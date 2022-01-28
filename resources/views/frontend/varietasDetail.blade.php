@extends('layouts.master2')

@section('konten')
  <div class="single-product mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-md-5">
					<div class="single-product-img">
						<img src="{{asset('storage/'.$varietas->imageUrl)}}" alt="">
					</div>
				</div>
				<div class="col-md-7">
					<div class="single-product-content">
            <h2 class="pb-3"><i><span class="orange-text">{{$varietas->varietas}}</span></h2>
						<div class="single-product-form">
            <table>
                <tr>
                  <td><strong>Cita Rasa</strong></td>
                  <td> : {{$varietas->cita_rasa}} </td>
                </tr>
                <tr>
                  <td><strong>Bentuk Buah</strong></td>
                  <td> : {{$varietas->bentuk->bentuk}} </td>
                </tr>
                <tr>
                  <td><strong>Ukuran Buah</strong></td>
                  <td> : {{$varietas->ukuran->ukuran}}</td>
                </tr>
                <tr>
                  <td><strong>Warna Kulit Buah</strong></td>
                  <td> : {{$varietas->warna_kulit->warna_kulit}}</td>
                </tr>
                <tr>
                  <td><strong>Warna Daging Buah</strong></td>
                  <td> : {{$varietas->warna_daging->warna_daging}}</td>
                </tr>
                <tr>
                  <td><strong>Produktivitas</strong></td>
                  <td> : {{$varietas->produktivitas}}</td>
                </tr>
                <tr>
                  <td><strong>Area Pengembangan</strong></td>
                  <td> : {{$varietas->area_pengembangan}}</td>
                </tr>
                <tr>
                  <td><strong>Ketinggian</strong></td>
                  <td> : {{$varietas->ketinggian_awal}} - {{$varietas->ketinggian_akhir}}</td>
                </tr>
                <tr>
                  <td><strong>Asal Pohon Induk</strong></td>
                  <td> : {{$varietas->asal_pohon_induk}}</td>
                </tr>
                <tr>
                  <td><strong>Sentra Produksi</strong></td>
                  <td> : {{$varietas->sentra_produksi}}</td>
                </tr>
                <tr>
                  <td><strong>Tahun Pelepasan</strong></td>
                  <td> : {{$varietas->tahun_pelepasan}}</td>
                </tr>
              </table>
						</div><br>
            <a href="/datavarietas" class="cart-btn"><i class="fas fa-hand-point-left"></i>Back</a>
            <a href="/home" class="cart-btn"><i class="fas fa-home"></i>Home</a>
          </div>
				</div>
			</div>
		</div>
	</div>
@endsection