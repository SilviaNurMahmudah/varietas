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
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="/varietas">Varietas</a></li>
              <li class="breadcrumb-item active">Edit</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-secondary">
            <div class="card-header">
              <h3 class="card-title">General</h3>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="inputName">Varietas</label>
                <input type="text" id="inputName" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputName">Cita Rasa</label>
                <input type="text" id="inputName" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputName">Bentuk Buah</label>
                <input type="text" id="inputName" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputName">Ukuran Buah</label>
                <input type="text" id="inputName" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputName">Warna Kulit</label>
                <input type="text" id="inputName" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputName">Warna Daging</label>
                <input type="text" id="inputName" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputName">Produktivitas</label>
                <input type="text" id="inputName" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputStatus">Area Pengembangan</label>
                <select id="inputStatus" class="form-control custom-select">
                  <option selected disabled>Select one</option>
                  <option>Dataran Rendah</option>
                  <option>Dataran Tinggi</option>
                </select>
              </div>
              <div class="form-group">
                <label for="inputClientCompany">Ketinggian Awal</label>
                <input type="text" id="inputClientCompany" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputClientCompany">Ketinggian Akhir</label>
                <input type="text" id="inputClientCompany" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputProjectLeader">Asal Pohon Induk</label>
                <input type="text" id="inputProjectLeader" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputClientCompany">Sentra Produksi</label>
                <input type="text" id="inputClientCompany" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputClientCompany">Tahun Pelepasan</label>
                <input type="text" id="inputClientCompany" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputClientCompany">Image</label>
                <input type="text" id="inputClientCompany" class="form-control">
              </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <a href="/varietas" class="btn btn-secondary">Cancel</a>
          <input type="submit" value="Submit" class="btn btn-success">
        </div>
      </div>
    </section>
  </div>
@endsection