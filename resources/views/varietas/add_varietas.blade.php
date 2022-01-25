@extends('layouts.master')

@section('konten')
<div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Project Add</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
              <li class="breadcrumb-item active">Add</li>
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
                  <form class="form-horizontal" action="/create-varietas" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="box-body">
                      <div class="row">
                        <div class="form-group col-md-6 col-xs-12">
                          <label for="title">Varietas</label>
                          <input type="text" class="form-control" required="required" name="varietas">
                        </div>
                        <div class="form-group col-md-6 col-xs-12">
                          <label for="inputCitaRasa">Cita Rasa</label>
                          <input type="text" class="form-control" required="required" name="cita_rasa">
                        </div>
                        <div class="form-group col-md-6 col-xs-12">
                          <label for="inputBentuk">Bentuk Buah</label>
                          <select id="inputArea" class="form-control custom-select"name="bentuk_id">
                            <option value="-" selected disabled></option>
                            @foreach($bentuk as $b)
                            <option value="{{$b->id}}">{{$b->bentuk}}</option>
                            @endforeach
                          </select>
                        </div>
                        <div class="form-group col-md-6 col-xs-12">
                          <label for="inputUkuran">Ukuran Buah</label>
                          <select id="inputArea" class="form-control custom-select" name="ukuran_id">
                            <option value="-" selected disabled></option>
                            @foreach($ukuran as $u)
                            <option value="{{$u->id}}">{{$u->ukuran}}</option>
                            @endforeach
                          </select>
                        </div>
                        <div class="form-group col-md-6 col-xs-12">
                          <label for="inputWKulit">Warna Kulit</label>
                          <select id="inputArea" class="form-control custom-select"name="warna_kulit_id">
                            <option value="-" selected disabled></option>
                            @foreach($warna_kulit as $k)
                            <option value="{{$k->id}}">{{$k->warna_kulit}}</option>
                            @endforeach
                          </select>
                        </div>
                        <div class="form-group col-md-6 col-xs-12">
                          <label for="inputWDaging">Warna Daging</label>
                          <select id="inputArea" class="form-control custom-select" name="warna_daging_id">
                            <option value="-" selected disabled></option>
                            @foreach($warna_daging as $d)
                            <option value="{{$d->id}}">{{$d->warna_daging}}</option>
                            @endforeach
                          </select>
                        </div>
                        <div class="form-group col-md-6 col-xs-12">
                          <label for="inputProduktivitas">Produktivitas</label>
                          <input type="text" class="form-control" required="required" name="produktivitas">
                        </div>
                        <div class="form-group col-md-6 col-xs-12">
                          <label for="inputArea">Area Pengembangan</label>
                          <select id="inputArea" class="form-control custom-select" name="area_pengembangan">
                            <option value="-" selected disabled></option>
                            <option value="Dataran Rendah">Dataran Rendah</option>
                            <option value="Dataran Tinggi">Dataran Tinggi</option>
                          </select>
                        </div>
                        <div class="form-group col-md-6 col-xs-12">
                          <label for="inputTinggi">Ketinggian Awal</label>
                          <input type="number" class="form-control" required="required" name="ketinggian_awal">
                        </div>
                        <div class="form-group col-md-6 col-xs-12">
                          <label for="inputTinggi">Ketinggian Akhir</label>
                          <input type="number" class="form-control" required="required" name="ketinggian_akhir">
                        </div>
                        <div class="form-group col-md-6 col-xs-12">
                          <label for="inputAsal">Asal Pohon Induk</label>
                          <input type="text" class="form-control" required="required" name="asal_pohon_induk">
                        </div>
                        <div class="form-group col-md-6 col-xs-12">
                          <label for="inputSentra">Sentra Produksi</label>
                          <input type="text" class="form-control" required="required" name="sentra_produksi">
                        </div>
                        <div class="form-group col-md-6 col-xs-12">
                          <label for="inputTahun">Tahun Pelepasan</label>
                          <input type="number" class="form-control" required="required" name="tahun_pelepasan">
                        </div>
                        <div class="form-group col-md-6 col-xs-12">
                          <label for="image">Image</label>
                          <input type="file" class="form-control" required="required" name="image">
                        </div>
                      </div>
                      <button type="submit" name="edit" class="btn btn-default pull-left btn-flat"><i class="nav-icon fas fa-save"> Simpan</i></button>
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