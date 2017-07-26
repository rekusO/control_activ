<?php

use Illuminate\Database\Seeder;
use App\Models\Oficina;

class OficinaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Oficina::create(['nombre'=>'Gerencia Comercial']);
        Oficina::create(['nombre'=>'Gerencia General']);
        Oficina::create(['nombre'=>'División de Contabilidad']);
        Oficina::create(['nombre'=>'Oficina de Sistemas']);
        Oficina::create(['nombre'=>'Oficina de Ingeniería']);
        Oficina::create(['nombre'=>'División de Recursos humanos']);
        Oficina::create(['nombre'=>'División de Logística']);
        Oficina::create(['nombre'=>'Oficina de Asesoría Legal']);
        Oficina::create(['nombre'=>'Oficina del Órgano de Control Interno']);
        Oficina::create(['nombre'=>'Gerencia de Administración']);
        Oficina::create(['nombre'=>'Ofician de Imagen Institucional']);
        Oficina::create(['nombre'=>'Oficina de Planificación']);
        Oficina::create(['nombre'=>'Gerencia de Operaciones']);
        Oficina::create(['nombre'=>'División de Catastro Comercial']);
        Oficina::create(['nombre'=>'División de Facturación y Medición']);
        Oficina::create(['nombre'=>'División de Comercialización y Cobranza']);
        Oficina::create(['nombre'=>'División de Unidad de Control de Calidad']);
        Oficina::create(['nombre'=>'Medición']);
        Oficina::create(['nombre'=>'Control Patrimonial']);
        Oficina::create(['nombre'=>'Atención al cliente-San Vicente']);
        Oficina::create(['nombre'=>'Catastro Técnico']);
        Oficina::create(['nombre'=>'Recaudación - San Vicente']);
        Oficina::create(['nombre'=>'Almacén']);
        Oficina::create(['nombre'=>'CAC Imperial']);
        Oficina::create(['nombre'=>'Directorio']);
        Oficina::create(['nombre'=>'Tesorería']);
    }
}
