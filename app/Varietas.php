<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Bentuk;
use App\Ukuran;
use App\WarnaDaging;
use App\WarnaKulit;

class Varietas extends Model
{
    protected $table = "varietas";

    public function bentuk() {
        return $this->belongsTo(Bentuk::class);
    }
    public function ukuran() {
        return $this->belongsTo(Ukuran::class);
    }
    public function wdaging() {
        return $this->belongsTo(WarnaDaging::class);
    }
    public function wkulit() {
        return $this->belongsTo(WarnaKulit::class);
    }
}
