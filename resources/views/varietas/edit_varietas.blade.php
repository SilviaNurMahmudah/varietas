@extends('layouts.master')

@section('konten')
<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Project Edit</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Edit</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
  
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Varietas</h3>
            </div>
            <div class="card-body">
              <div id="main">
                <div class="container-fluid">
                  <form class="form-horizontal" action="/update-varietas-{{$varietas->id}}" method="post">
                    @csrf
                    <div class="box-body">
                      <div class="row">
                        <div class="form-group col-md-6 col-xs-12">
                          <label for="title">Varietas</label>
                          <input type="text" class="form-control" required="required" name="varietas" value="{{$varietas->varietas}}">
                        </div>
                        <div class="form-group col-md-6 col-xs-12">
                          <label for="inputCitaRasa">Cita Rasa</label>
                          <input type="text" class="form-control" required="required" name="cita_rasa" value="{{$varietas->cita_rasa}}">
                        </div>
                        <div class="form-group col-md-6 col-xs-12">
                          <label for="inputBentuk">Bentuk Buah</label>
                          <select id="inputArea" class="form-control custom-select" name="bentuk">
                            <option value="{{$varietas->bentuk_id}}" selected disabled>{{$varietas->bentuk->bentuk}}</option>
                            @foreach($bentuk as $b)
                            <option value="{{$b->id}}">{{$b->bentuk}}</option>
                            @endforeach
                          </select>
                        </div>
                        <div class="form-group col-md-6 col-xs-12">
                          <label for="inputUkuran">Ukuran Buah</label>
                          <select id="inputArea" class="form-control custom-select" name="ukuran">
                            <option value="{{$varietas->ukuran_id}}" selected disabled>{{$varietas->ukuran->ukuran}}</option>
                            @foreach($ukuran as $u)
                            <option value="{{$u->id}}">{{$u->ukuran}}</option>
                            @endforeach
                          </select>
                        </div>
                        <div class="form-group col-md-6 col-xs-12">
                          <label for="inputWKulit">Warna Kulit</label>
                          <select id="inputArea" class="form-control custom-select" name="warna_kulit">
                            <option value="{{$varietas->warna_kulit_id}}" selected disabled>{{$varietas->warna_kulit->warna_kulit}}</option>
                            @foreach($warna_kulit as $k)
                            <option value="{{$k->id}}">{{$k->warna_kulit}}</option>
                            @endforeach
                          </select>
                        </div>
                        <div class="form-group col-md-6 col-xs-12">
                          <label for="inputWDaging">Warna Daging</label>
                          <select id="inputArea" class="form-control custom-select" name="warna_daging">
                            <option value="{{$varietas->warna_daging_id}}" selected disabled>{{$varietas->warna_daging->warna_daging}}</option>
                            @foreach($warna_daging as $d)
                            <option value="{{$d->id}}">{{$d->warna_daging}}</option>
                            @endforeach
                          </select>
                        </div>
                        <div class="form-group col-md-6 col-xs-12">
                          <label for="inputProduktivitas">Produktivitas</label>
                          <input type="text" class="form-control" required="required" name="produktivitas" value="{{$varietas->produktivitas}}">
                        </div>
                        <div class="form-group">
                          <label for="inputArea">Area Pengembangan</label>
                          <select id="inputArea" class="form-control custom-select" name="area_pengembangan">
                            <option value="{{$varietas->area_pengembangan}}" selected disabled>{{$varietas->area_pengembangan}}</option>
                            <option value="Dataran Rendah">Dataran Rendah</option>
                            <option value="Dataran Tinggi">Dataran Tinggi</option>
                          </select>
                        </div>
                        <div class="form-group col-md-6 col-xs-12">
                          <label for="inputTinggi">Ketinggian Awal</label>
                          <input type="text" class="form-control" required="required" name="ketinggian_awal" value="{{$varietas->ketinggian_awal}}">
                        </div>
                        <div class="form-group col-md-6 col-xs-12">
                          <label for="inputTinggi">Ketinggian Akhir</label>
                          <input type="text" class="form-control" required="required" name="ketinggian_akhir" value="{{$varietas->ketinggian_akhir}}">
                        </div>
                        <div class="form-group col-md-6 col-xs-12">
                          <label for="inputAsal">Asal Pohon Induk</label>
                          <input type="text" class="form-control" required="required" name="asal_pohon_induk" value="{{$varietas->asal_pohon_induk}}">
                        </div>
                        <div class="form-group col-md-6 col-xs-12">
                          <label for="inputSentra">Sentra Produksi</label>
                          <input type="text" class="form-control" required="required" name="sentra_produksi" value="{{$varietas->sentra_produksi}}">
                        </div>
                        <div class="form-group col-md-6 col-xs-12">
                          <label for="inputTahun">Tahun Pelepasan</label>
                          <input type="text" class="form-control" required="required" name="tahun_pelepasan" value="{{$varietas->tahun_pelepasan}}">
                        </div>
                        <div class="form-group col-md-6 col-xs-12">
                          <label for="inputGambar">Image</label>
                          <input type="text" class="form-control" required="required" name="imageUrl" value="{{$varietas->imageUrl}}">
                        </div>
                      </div>
                      <button type="submit" name="edit" class="btn btn-default pull-left btn-flat"><i class="nav-icon fas fa-save"> Edit</i></button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>           
        </div>
      </div>
    </div> 
  </section>
</div>
@endsection