<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Varietas;
use Faker\Generator as Faker;

$factory->define(Varietas::class, function (Faker $faker) {
    return [
        'varietas' => $faker->sentence(),
        'cita_rasa' => $faker->sentence(),
        'bentuk_buah' => $faker->sentence(),
        'ukuran_buah' => $faker->sentence(),
        'warna_kulit' => $faker->sentence(),
        'warna_daging' => $faker->sentence(),
        'produktivitas' => $faker->sentence(),
        'area_pengembangan' => $faker->sentence(),
        'ketinggian_awal' => $faker->unique()->numberBetween(1, 2000),
        'ketinggian_akhir' => $faker->unique()->numberBetween(1, 2000),
        'asal_pohon_induk' => $faker->sentence(),
        'sentra_produksi' => $faker->sentence(),
        'tahun_pelepasan' => $faker->unique()->numberBetween(1990, 2020),
        'imageUrl' => $faker->imageUrl()   
    ];
});
