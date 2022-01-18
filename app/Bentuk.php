<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Varietas;

class Bentuk extends Model
{
    protected $fillable = ['bentuk'];

    public function varietas() {
        return $this->hasMany(Varietas::class);
    }
}
