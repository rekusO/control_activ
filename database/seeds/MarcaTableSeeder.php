<?php

use Illuminate\Database\Seeder;
use App\Models\Marca;

class MarcaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Marca::create(['nombre'=>'hp']);
        Marca::create(['nombre'=>'Sony']);
    }
}
