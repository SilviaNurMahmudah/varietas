<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Varietas;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('frontend.home');
    }
    public function varietas()
    {
        $varietas = Varietas::with('ukuran','bentuk','warna_daging','warna_kulit')->paginate(10);
        return view('frontend.varietas',['varietas'=> $varietas]);
    }
    public function varietasId($id){
        $varietas = Varietas::with('ukuran','bentuk','warna_daging','warna_kulit');
        $varietas = Varietas::find($id);
        return view('frontend.varietasDetail',['varietas'=> $varietas],['id'=> $id]);
    }
    public function rekomendasi()
    {
        return view('frontend.rekomendasi');
    }
    public function recom(Request $request) {
		$cari = $request->cari;
        $varietas = Varietas::WHERE('ketinggian_awal', '<=', $cari)->WHERE('ketinggian_akhir', '>=', $cari)->get();
        return view('frontend.varietas',['varietas'=> $varietas]);
    }
    public function cari(Request $request) {
		$cari = $request->cari;
        $varietas = Varietas::where('varietas','like',"%".$cari."%")->paginate();
        return view('frontend.varietas',['varietas'=> $varietas]);
    }
}
