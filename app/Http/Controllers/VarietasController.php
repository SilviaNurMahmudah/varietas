<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Varietas;

class VarietasController extends Controller
{
    public function getAll(){
        $varietas = Varietas::with('ukuran')->paginate(5);
        return view('varietas.varietas',['varietas'=> $varietas]);
    }
    public function getById($id){
        $varietas = Varietas::find($id);
        return view('varietas.varietasDetail',['varietas'=> $varietas],['id'=> $id]);
    }
    public function add(){
        return view('varietas.add_varietas');
    }   
    public function edit(){
        return view('varietas.edit_varietas');
    } 
}
