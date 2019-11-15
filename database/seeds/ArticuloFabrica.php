<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facedes\DB;

class ArticuloFabrica extends Seeder
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
                'existencia' => 'activo',
            ],
            [
                'existencia' => 'inactivo',
            ],
            [
                'existencia' => 'activo',
            ],
            [
                'existencia' => 'inactivo',
            ],
            [
                'existencia' => 'activo',
            ],
            [
                'existencia' => 'inactivo',
            ],
            [
                'existencia' => 'activo',
            ],
            [
                'existencia' => 'inactivo',
            ],
            [
                'existencia' => 'activo',
            ],
            [
                'existencia' => 'inactivo',
            ]
        ]);
    }
}
