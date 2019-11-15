<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facedes\DB;

class ArticuloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articulo')->insert([
            [
                'descripcion' => 'Galletas Ferrari',
            ],
            [
                'descripcion' => 'Fideos La zaroni',
            ],
            [
                'descripcion' => 'TV Samsung',
            ],
            [
                'descripcion' => 'Celular Huawey',
            ],
            [
                'descripcion' => 'Computadora HP',
            ],
            [
                'descripcion' => 'Mouse HP',
            ],
            [
                'descripcion' => 'Parlantes Beats',
            ],
            [
                'descripcion' => 'Gaceosa Cocacola',
            ],
            [
                'descripcion' => 'Chicles Groso',
            ],
            [
                'descripcion' => 'Masticables Sandy',
            ]
        ]);
    }
}
