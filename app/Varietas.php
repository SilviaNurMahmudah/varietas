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
    protected $fillable = [
        'varietas',
        'cita_rasa',
        'bentuk_id',
        'ukuran_id',
        'warna_kulit_id',
        'warna_daging_id',
        'produktivitas',
        'area_pengembangan',
        'ketinggian_awal',
        'ketinggian_akhir',
        'asal_pohon_induk',
        'sentra_produksi',
        'tahun_pelepasan',
        'imageUrl'
    ];

    public function bentuk() {
        return $this->belongsTo(Bentuk::class);
    }
    public function ukuran() {
        return $this->belongsTo(Ukuran::class);
    }
    public function warna_daging() {
        return $this->belongsTo(WarnaDaging::class);
    }
    public function warna_kulit() {
        return $this->belongsTo(WarnaKulit::class);
    }
}
