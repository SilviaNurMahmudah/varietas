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
                <img style="width:250px;height;250px" src="{{asset('storage/'.$varietas->imageUrl)}}" class="image" alt="Image">
              </div>
            </div>
            <div class="col-12 col-sm-6">
              <h3 class="my-3">{{$varietas->varietas}}</h3>
              <table>
                <tr>
                  <td>Cita Rasa</td>
                  <td> : {{$varietas->cita_rasa}} </td>
                </tr>
                <tr>
                  <td>Bentuk Buah</td>
                  <td> : {{$varietas->bentuk->bentuk}} </td>
                </tr>
                <tr>
                  <td>Ukuran Buah</td>
                  <td> : {{$varietas->ukuran->ukuran}}</td>
                </tr>
                <tr>
                  <td>Warna Kulit Buah</td>
                  <td> : {{$varietas->warna_kulit->warna_kulit}}</td>
                </tr>
                <tr>
                  <td>Warna Daging Buah</td>
                  <td> : {{$varietas->warna_daging->warna_daging}}</td>
                </tr>
                <tr>
                  <td>Produktivitas</td>
                  <td> : {{$varietas->produktivitas}}</td>
                </tr>
                <tr>
                  <td>Area Pengembangan</td>
                  <td> : {{$varietas->area_pengembangan}}</td>
                </tr>
                <tr>
                  <td>Ketinggian</td>
                  <td> : {{$varietas->ketinggian_awal}} - {{$varietas->ketinggian_akhir}}</td>
                </tr>
                <tr>
                  <td>Asal Pohon Induk</td>
                  <td> : {{$varietas->asal_pohon_induk}}</td>
                </tr>
                <tr>
                  <td>Sentra Produksi</td>
                  <td> : {{$varietas->sentra_produksi}}</td>
                </tr>
                <tr>
                  <td>Tahun Pelepasan</td>
                  <td> : {{$varietas->tahun_pelepasan}}</td>
                </tr>
              </table>
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