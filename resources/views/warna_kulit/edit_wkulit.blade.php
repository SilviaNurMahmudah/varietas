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
    <form action="/update-warna_kulit-{{$warna_kulit->id}}" method="post">
      @csrf
      <div class="form-group">
        <label for="title">Warna Kulit Buah</label>
        <input type="text" class="form-control" required="required" name="warna_kulit" value="{{$warna_kulit->warna_kulit}}"></br>
      </div>
      <button type="submit" name="edit" class="btn btn-primary float-right">Edit Data</button>
    </form>
    </section>
</div>
@endsection