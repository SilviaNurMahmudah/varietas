@extends('layouts.master')

@section('konten')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Kelola User</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Data User</li>
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
              <h3 class="card-title">Data User</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>#</th>
                  <th>Nama</th>
                  <th>Email</th>
                  <th>Roles</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                @php $i=1 @endphp  
                @foreach($users as $u)
                <tr>
                  <td>{{$i++}}</td>
                  <td>{{$u->name}}</td>
                  <td>{{$u->email}}</td>
                  <td>{{$u->roles}}</td>
                  <td>
                    <a href="/edit-user-{{$u->id}}"  class="btn btn-warning btn-circle">
                      <i class="fas fa-edit"></i>
                    </a>
                    <a href="/delete-user-{{$u->id}}" class="btn btn-danger btn-circle" onclick="return confirm('Yakin Hapus Data ?')">
                      <i class="fas fa-trash"></i>
                    </a>
                  </td>
                </tr>
                @endforeach
                </tbody>
              </table>
              <div>
                Showing {{$users->firstItem()}} to {{$users->lastItem()}} of {{$users->total()}}
              </div>
              <div>
                {{ $users->links() }}
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