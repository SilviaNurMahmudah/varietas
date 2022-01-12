<?php

use Illuminate\Database\Seeder;

class VarietasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Varietas::class, 2)->create();
    }
}
