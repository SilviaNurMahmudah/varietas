@extends('layouts.master')

@section('konten')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Warna Daging Buah</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Warna Daging Buah</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- /.row -->
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Data Warna Daging Buah</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>#</th>
                  <th>Warna Daging Buah</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                @php $i=1 @endphp  
                @foreach($warna_daging as $b)
                <tr>
                  <td>{{$i++}}</td>
                  <td>{{$b->warna_daging}}</td>
                  <td>  
                    <a href="/edit-warna_daging"  class="btn btn-warning btn-circle ">
                      <i class="fas fa-edit"></i>
                    </a>
                    <a href="#" class="btn btn-danger btn-circle ">
                      <i class="fas fa-trash"></i>
                    </a>
                  </td>
                </tr>
                @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>            
          <!-- /.card -->
        </div>
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
@endsection