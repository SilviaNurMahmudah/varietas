<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Varietas;

class WarnaDaging extends Model
{
    protected $fillable = ['warna_daging'];

    public function varietas() {
        return $this->hasMany(Varietas::class);
    }
}
