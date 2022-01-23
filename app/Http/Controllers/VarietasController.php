<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Varietas;
use App\Bentuk;
use App\Ukuran;
use App\WarnaKulit;
use App\WarnaDaging;

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
        $varietas = Varietas::with('ukuran','bentuk','warna_daging','warna_kulit')->paginate(2);
        return view('varietas.varietas',['varietas'=> $varietas]);
    }
    public function getById($id){
        $varietas = Varietas::with('ukuran','bentuk','warna_daging','warna_kulit');
        $varietas = Varietas::find($id);
        return view('varietas.varietasDetail',['varietas'=> $varietas],['id'=> $id]);
    }
    public function add(){
        $bentuk = Bentuk::all();
        $ukuran = Ukuran::all();
        $warna_kulit = WarnaKulit::all();
        $warna_daging = WarnaDaging::all();
        return view(
            'varietas.add_varietas',
            ['bentuk'=> $bentuk,
            'ukuran'=> $ukuran, 
            'warna_kulit'=> $warna_kulit,
            'warna_daging'=> $warna_daging],
        );

    }   
    public function create(Request $request) {
        Varietas::create([
            'varietas' => $request->varietas,
            'bentuk_id' => $request->bentuk_id,
            'ukuran_id' => $request->ukuran_id,
            'warna_kulit_id' => $request->warna_kulit_id,
            'warna_daging_id' => $request->warna_daging_id,
            'cita_rasa' => $request->cita_rasa,
            'produktivitas' => $request->produktivitas,
            'area_pengembangan' => $request->area_pengembangan,
            'ketinggian_awal' => $request->ketinggian_awal,
            'ketinggian_akhir' => $request->ketinggian_akhir,
            'asal_pohon_induk' => $request->asal_pohon_induk,
            'sentra_produksi' => $request->sentra_produksi,
            'tahun_pelepasan' => $request->tahun_pelepasan,
            'imageUrl' => $request->imageUrl
        ]);
        return redirect('/varietas')->with('status','Data berhasil ditambahkan');
    }   
    public function edit($id){
        $varietas = Varietas::with('ukuran','bentuk','warna_daging','warna_kulit');
        $varietas = Varietas::find($id);
        $bentuk = Bentuk::all();
        $ukuran = Ukuran::all();
        $warna_kulit = WarnaKulit::all();
        $warna_daging = WarnaDaging::all();
        return view(
            'varietas.edit_varietas',
            ['varietas'=>$varietas,
            'bentuk'=> $bentuk,
            'ukuran'=> $ukuran, 
            'warna_kulit'=> $warna_kulit,
            'warna_daging'=> $warna_daging],
            ['id'=> $id]
        );
    }
    public function update($id, Request $request) {
        $varietas = Varietas::find($id);
        $varietas->varietas = $request->varietas;
        $varietas->bentuk_id = $request->bentuk_id;
        $varietas->ukuran_id = $request->ukuran_id;
        $varietas->warna_kulit_id = $request->warna_kulit_id;
        $varietas->warna_daging_id = $request->warna_daging_id;
        $varietas->cita_rasa = $request->cita_rasa;
        $varietas->produktivitas = $request->produktivitas;
        $varietas->area_pengembangan = $request->area_pengembangan;
        $varietas->ketinggian_awal = $request->ketinggian_awal;
        $varietas->ketinggian_akhir = $request->ketinggian_akhir;
        $varietas->asal_pohon_induk = $request->asal_pohon_induk;
        $varietas->sentra_produksi = $request->sentra_produksi;
        $varietas->tahun_pelepasan = $request->tahun_pelepasan;
        $varietas->imageUrl = $request->imageUrl;
        $varietas->save();
        return redirect('/varietas')->with('status', 'Data berhasil diedit');
    } 
    public function delete($id){
        $varietas = Varietas::find($id);
        $varietas->delete();
        return redirect('/varietas')->with('status','Data berhasil dihapus');
    } 
}
