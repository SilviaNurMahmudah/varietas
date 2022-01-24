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
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Kelola User</h3>
            </div>
            <div class="card-body">
              <div id="main">
                <div class="container-fluid">
                  <form class="form-horizontal" action="/create-user" method="post">
                    @csrf
                    <div class="box-body">
                      <div class="row">
                        <div class="form-group col-md-6 col-xs-12">
                          <label for="inputName">Nama</label>
                          <input type="text" class="form-control" required="required" name="name" placeholder="Masukkan Nama"></br>
                        </div>
                      </div>
                      <div class="row">
                        <div class="form-group col-md-6 col-xs-12">
                          <label for="inputName">Email</label>
                          <input type="text" class="form-control" required="required" name="email" placeholder="Masukkan Email"></br>
                        </div>
                      </div>
                      <div class="row">
                        <div class="form-group col-md-6 col-xs-12">
                          <label for="inputName">Password</label>
                          <input type="text" class="form-control" required="required" name="password" placeholder="Masukkan Password"></br>
                        </div>
                      </div>
                      <div class="row">
                        <div class="form-group col-md-6 col-xs-12">
                          <label for="inputName">Roles</label>
                          <input type="text" class="form-control" required="required" name="roles" placeholder="Masukkan Roles"></br>
                        </div>
                      </div>
                      <button type="submit" name="add" class="btn btn-default pull-left btn-flat"><i class="nav-icon fas fa-save"> Simpan</i></button>
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