<?php

use Illuminate\Database\Seeder;
use App\Models\Estado;

class EstadoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Estado::create(['nombre'=>'Bueno']);
        Estado::create(['nombre'=>'Regular']);
        Estado::create(['nombre'=>'Por reparar']);
        Estado::create(['nombre'=>'Mal estado']);
        Estado::create(['nombre'=>'Obsoleto']);
        Estado::create(['nombre'=>'De baja']);
        Estado::create(['nombre'=>'Perdido']);
    }
}
