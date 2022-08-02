<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function getAll(){
        $users = User::paginate(10);
        return view('kelolauser.user',['users'=> $users]);
    }
    public function add(){
        return view('kelolauser.add_user');
    }
    public function create(Request $request) {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'roles' => $request->roles,
        ]);
        return redirect('/users')->with('status', 'Data berhasil ditambahkan');
    }   
    public function edit($id){
        $users = User::find($id);
        return view('kelolauser.edit_user',['users'=>$users]);
    }
    public function update($id, Request $request) {
        $users = User::find($id);
        $users->name = $request->name;
        $users->email = $request->email;
        $users->password = $request->password;
        $users->roles = $request->roles;
        $users->save();
        return redirect('/users')->with('status', 'Data berhasil diedit');
    }
    public function delete($id){
        $users = User::find($id);
        $users->delete();
        return redirect('/users')->with('status', 'Data berhasil dihapus');
    } 
}
