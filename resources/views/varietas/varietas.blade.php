  @extends('layouts.master')

  @section('konten')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>VARIETAS</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
              <li class="breadcrumb-item active">Varietas</li>
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
            @if(session('status'))
            <div class="alert alert-success">
              {{session('status')}}
            </div>
            @endif
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Varietas</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>varietas</th>
                    <th>area pengembangan</th>
                    <th>tahun pelepasan</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody> 
                  @foreach($varietas as $key => $v)
                  <tr>
                    <td>{{$varietas->firstItem()+$key}}</td>
                    <td>{{$v->varietas}}</td>
                    <td>{{$v->area_pengembangan}}</td>
                    <td>{{$v->tahun_pelepasan}}</td>
                    <td>                      
                      <a href="/varietas-{{$v->id}}" class="btn btn-primary btn-circle ">
                        <i class="fas fa-eye"></i>
                      </a>
                      <a href="/edit-varietas-{{$v->id}}"  class="btn btn-warning btn-circle">
                        <i class="fas fa-edit"></i>
                      </a>
                      <a href="/delete-varietas-{{$v->id}}" class="btn btn-danger btn-circle" onclick="return confirm('Yakin Hapus Data ?')">
                        <i class="fas fa-trash"></i>
                      </a>
                    </td>
                  </tr>
                  @endforeach
                  </tbody>
                </table><br>
                <div>
                  Showing {{$varietas->firstItem()}} to {{$varietas->lastItem()}} of {{$varietas->total()}}
                </div>
                <div>
                  {{ $varietas->links() }}
                </div>
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