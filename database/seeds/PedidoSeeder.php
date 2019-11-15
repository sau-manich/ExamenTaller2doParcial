<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facedes\DB;

class PedidoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pedido')->insert([
            [
                'fecha' => '2019-11-05',
            ],
            [
                'fecha' => '2019-11-06',
            ],
            [
                'fecha' => '2019-11-07',
            ],
            [
                'fecha' => '2019-11-08',
            ],
            [
                'fecha' => '2019-11-09',
            ],
            [
                'fecha' => '2019-11-10',
            ],
            [
                'fecha' => '2019-11-11',
            ],
            [
                'fecha' => '2019-11-12',
            ],
            [
                'fecha' => '2019-11-13',
            ],
            [
                'fecha' => '2019-11-14',
            ],
            [
                'fecha' => '2019-11-15',
            ]
        ]);
    }
}
