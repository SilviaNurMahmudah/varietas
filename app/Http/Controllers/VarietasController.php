<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Varietas;

class VarietasController extends Controller
{
    public function getAll(){
        $varietas = Varietas::all();
        return view('varietas',['varietas'=> $varietas]);
    }
    public function getById($id){
        $varietas = Varietas::find($id);
        return view('varietasDetail',['varietas'=> $varietas],['id'=> $id]);
    }
    public function add(){
        return view('add_varietas');
    }   
    public function edit(){
        return view('edit_varietas');
    } 
}
