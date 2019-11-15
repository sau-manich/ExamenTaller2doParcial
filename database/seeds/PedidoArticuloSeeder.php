<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facedes\DB;

class PedidoArticuloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pedidoArticulo')->insert([
            [
                'cantidad' => 50,
            ],
            [
                'cantidad' => 100,
            ],
            [
                'cantidad' => 150,
            ],
            [
                'cantidad' => 200,
            ],
            [
                'cantidad' => 250,
            ],
            [
                'cantidad' => 300,
            ],
            [
                'cantidad' => 350,
            ],
            [
                'cantidad' => 400,
            ],
            [
                'cantidad' => 450,
            ],
            [
                'cantidad' => 500,
            ]
        ]);
    }
}
