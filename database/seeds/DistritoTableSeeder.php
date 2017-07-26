<?php

use Illuminate\Database\Seeder;
use App\Models\Distrito;

class DistritoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Distrito::create(['nombre'=>'San Vicente ']);
        Distrito::create(['nombre'=>'Imperial']);
        Distrito::create(['nombre'=>'Mala']);
        Distrito::create(['nombre'=>'San Luis']);
        Distrito::create(['nombre'=>'Cerro Azul']);
        Distrito::create(['nombre'=>'Quilmana']);
        Distrito::create(['nombre'=>'Lunahuana']);
        Distrito::create(['nombre'=>'Asia']);
        Distrito::create(['nombre'=>'San Antonio']);
        Distrito::create(['nombre'=>'Santa Cruz de Flores']);
        Distrito::create(['nombre'=>'Chilca']);
    }
}
