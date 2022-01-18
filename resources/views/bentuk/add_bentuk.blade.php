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
              <li class="breadcrumb-item active">Add</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    
    <section class="content">
    <form action="/create-bentuk" method="post">
      @csrf
      <div class="form-group">
        <label for="title">Ukuran Buah</label>
        <input type="text" class="form-control" required="required" name="bentuk"></br>
      </div>
      <button type="submit" name="add" class="btn btn-primary">Tambah Data</button>
    </form>
    
    </section>
</div>
@endsection