<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Varietas;

class VarietasController extends Controller
{
    public function __construct()
    {
        $this->middleware(function($request, $next){
            if(Gate::allows('manage')) return $next($request);
            abort(403, 'Anda tidak memiliki cukup hak akses');
        });
    }
    public function getAll(){
        $varietas = Varietas::with('ukuran','bentuk','wdaging','wkulit')->paginate(5);
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
