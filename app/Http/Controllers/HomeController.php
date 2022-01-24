<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware(function($request, $next){
            if(Gate::allows('user-display')) return $next($request);
            abort(403, 'Anda tidak memiliki cukup hak akses');
        });
    }
    public function index()
    {
        return view('frontend.home');
    }
    public function varietas()
    {
        return view('frontend.varietas');
    }
    public function rekomendasi()
    {
        return view('frontend.rekomendasi');
    }
}
