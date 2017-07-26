<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(PersonaTableSeeder::class);
        $this->call(OficinaTableSeeder::class);
        $this->call(DistritoTableSeeder::class);
        $this->call(UnidadTableSeeder::class);
        $this->call(MarcaTableSeeder::class);
        $this->call(EstadoTableSeeder::class);
        $this->call(DocumentoTableSeeder::class);
        $this->call(UsersTableSeeder::class);
    }
}
