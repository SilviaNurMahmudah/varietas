<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Varietas;

class Ukuran extends Model
{
    protected $table = "ukurans";
    protected $primarykey = "id";

    public function varietas() {
        return $this->hasMany(Varietas::class);
    }
}
