<?php

use Illuminate\Database\Seeder;
use App\Models\Documento;

class DocumentoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Documento::create(['nombre'=>'Factura']);
        Documento::create(['nombre'=>'Boleta']);
    }
}
