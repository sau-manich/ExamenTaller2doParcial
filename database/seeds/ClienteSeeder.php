<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facedes\DB;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clientes')->insert([
            [
                'numeroCliente' => 1,
                'nombre' => 'Saul',
                'saldo' => 100,
                'descuento' => 10
            ],
            [
                'numeroCliente' => 2,
                'nombre' => 'Gustavo',
                'saldo' => 150,
                'descuento' => 10
            ],
            [
                'numeroCliente' => 3,
                'nombre' => 'Roger',
                'saldo' => 200,
                'descuento' => 10
            ],
            [
                'numeroCliente' => 4,
                'nombre' => 'Baruc',
                'saldo' => 250,
                'descuento' => 10
            ],
            [
                'numeroCliente' => 5,
                'nombre' => 'Douglas',
                'saldo' => 300,
                'descuento' => 10
            ],
            [
                'numeroCliente' => 6,
                'nombre' => 'Yholanda',
                'saldo' => 350,
                'descuento' => 10
            ],
            [
                'numeroCliente' => 7,
                'nombre' => 'Wara',
                'saldo' => 400,
                'descuento' => 10
            ],
            [
                'numeroCliente' => 8,
                'nombre' => 'Michelle',
                'saldo' => 450,
                'descuento' => 10
            ],
            [
                'numeroCliente' => 9,
                'nombre' => 'Diana',
                'saldo' => 500,
                'descuento' => 10
            ],
            [
                'numeroCliente' => 10,
                'nombre' => 'Mary',
                'saldo' => 5500,
                'descuento' => 10
            ]
        ]);
    }
}
