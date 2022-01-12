@extends('layouts.master')

@section('konten')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>{{$varietas->varietas}}</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="/varietas">Varietas</a></li>
              <li class="breadcrumb-item active">Detail</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card card-solid">
        <div class="card-body">
          <div class="row">
            <div class="col-12 col-sm-6">
              <h3 class="d-inline-block d-sm-none">{{$varietas->varietas}}</h3>
              <div class="col-12">
                <img src="{{$varietas->imageUrl}}" class="product-image" alt="Product Image">
              </div>
            </div>
            <div class="col-12 col-sm-6">
              <h3 class="my-3">{{$varietas->varietas}}</h3>
              <p>
                Cita Rasa : {{$varietas->cita_rasa}} <br>
                Bentuk Buah: {{$varietas->bentuk_buah}} <br>
                Ukuran Buah : {{$varietas->ukuran_buah}} <br>
                Warna daging : {{$varietas->warna_daging}} <br>
                Produktivitas : {{$varietas->produktivitas}} <br>
                Area Pengembangan : {{$varietas->area_pengembangan}} <br>
                Ketinggian : {{$varietas->ketinggian_awal}} - {{$varietas->ketinggian_akhir}} <br>
                Asal Pohon Induk : {{$varietas->asal_pohon_induk}} <br>
                Sentra Produksi : {{$varietas->sentra_produksi}} <br>
                Tahun Pelepasan : {{$varietas->tahun_pelepasan}} <br>
              </p>
              <hr>
            </div>
          </div>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </section>
    <!-- /.content -->
  </div>
  @endsection