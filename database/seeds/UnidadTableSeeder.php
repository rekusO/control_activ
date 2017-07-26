<?php

use Illuminate\Database\Seeder;
use App\Models\Unidad;

class UnidadTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Unidad::create(['nombre'=>'cja']);
        Unidad::create(['nombre'=>'pza']);
        Unidad::create(['nombre'=>'kg']);
        Unidad::create(['nombre'=>'und']);
        Unidad::create(['nombre'=>'cm']);
        Unidad::create(['nombre'=>'mt']);
    }
}
