<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facedes\DB;

class Fabrica extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articuloFabrica')->insert([
            [
                'numeroArticulosProvistos' => 1,
                'numeroFabrica' => 10,
                'telefono' => 65504799
            ],
            [
                'numeroArticulosProvistos' => 2,
                'numeroFabrica' => 20,
                'telefono' => 65504799
            ],
            [
                'numeroArticulosProvistos' => 3,
                'numeroFabrica' => 30,
                'telefono' => 65504799
            ],
            [
                'numeroArticulosProvistos' => 4,
                'numeroFabrica' => 40,
                'telefono' => 65504799
            ],
            [
                'numeroArticulosProvistos' => 5,
                'numeroFabrica' => 50,
                'telefono' => 65504799
            ],
            [
                'numeroArticulosProvistos' => 6,
                'numeroFabrica' => 60,
                'telefono' => 65504799
            ],
            [
                'numeroArticulosProvistos' => 7,
                'numeroFabrica' => 70,
                'telefono' => 65504799
            ],
            [
                'numeroArticulosProvistos' => 8,
                'numeroFabrica' => 80,
                'telefono' => 65504799
            ],
            [
                'numeroArticulosProvistos' => 9,
                'numeroFabrica' => 90,
                'telefono' => 65504799
            ],
            [
                'numeroArticulosProvistos' => 10,
                'numeroFabrica' => 100,
                'telefono' => 65504799
            ]
        ]);
    }
}
