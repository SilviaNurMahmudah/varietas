<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ukuran;

class UkuranController extends Controller
{
    public function getAll(){
        $ukuran = Ukuran::all();
        return view('ukuran.ukuran',['ukuran'=> $ukuran]);
    }
}
