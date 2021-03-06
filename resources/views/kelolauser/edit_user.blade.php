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
              <h3 class="card-title">Kelola User</h3>
            </div>
            <div class="card-body">
              <div id="main">
                <div class="container-fluid">
                  <form class="form-horizontal" action="/update-user-{{$users->id}}" method="post">
                    @csrf
                    <div class="box-body">
                      <div class="row">
                        <div class="form-group col-md-6 col-xs-12">
                          <label for="inputName">Nama</label>
                          <input type="text" class="form-control" required="required" name="name" value="{{$users->name}}"></br>
                        </div>
                      </div>
                      <div class="row">
                        <div class="form-group col-md-6 col-xs-12">
                          <label for="inputEmail">Email</label>
                          <input type="text" class="form-control" required="required" name="email" value="{{$users->email}}"></br>
                        </div>
                      </div>
                      <div class="row">
                        <div class="form-group col-md-6 col-xs-12">
                          <label for="inputPassword">Password</label>
                          <input type="text" class="form-control" required="required" name="password"></br>
                        </div>
                      </div>
                      <div class="form-group col-md-6 col-xs-12">
                        <label for="inputRoles">Roles</label>
                        <select id="inputRoles" class="form-control custom-select" name="roles">
                          <option value="{{$users->roles}}" selected disabled>{{$users->roles}}</option>
                          <option value="Admin">Admin</option>
                          <option value="Operator">Operator</option>
                          <option value="User">User</option>
                        </select>
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