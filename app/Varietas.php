<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Ukuran;

class Varietas extends Model
{
    protected $table = "varietas";

    public function ukuran() {
        return $this->belongsTo(Ukuran::class);
    }
}
