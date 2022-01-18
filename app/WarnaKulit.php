<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Varietas;

class WarnaKulit extends Model
{
    protected $fillable = ['warna_kulit'];

    public function varietas() {
        return $this->hasMany(Varietas::class);
    }
}
