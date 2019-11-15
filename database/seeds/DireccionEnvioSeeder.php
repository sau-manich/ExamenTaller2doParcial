<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facedes\DB;

class DireccionEnvioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('direccionEnvio')->insert([
            [
                'numero' => 1,
                'calle' => 'Calle 21 Septiembre',
                'comuna' => 'Vinto',
                'ciudad' => 'Cochabamba'
            ],
            [
                'numero' => 2,
                'calle' => 'Calle 22 Septiembre',
                'comuna' => 'Vinto',
                'ciudad' => 'Cochabamba'
            ],
            [
                'numero' => 3,
                'calle' => 'Calle 23 Septiembre',
                'comuna' => 'Vinto',
                'ciudad' => 'Cochabamba'
            ],
            [
                'numero' => 4,
                'calle' => 'Calle 24 Septiembre',
                'comuna' => 'Vinto',
                'ciudad' => 'Cochabamba'
            ],
            [
                'numero' => 5,
                'calle' => 'Calle 25 Septiembre',
                'comuna' => 'Vinto',
                'ciudad' => 'Cochabamba'
            ],
            [
                'numero' => 6,
                'calle' => 'Calle 26 Septiembre',
                'comuna' => 'Vinto',
                'ciudad' => 'Cochabamba'
            ],
            [
                'numero' => 7,
                'calle' => 'Calle 27 Septiembre',
                'comuna' => 'Vinto',
                'ciudad' => 'Cochabamba'
            ],
            [
                'numero' => 8,
                'calle' => 'Calle 28 Septiembre',
                'comuna' => 'Vinto',
                'ciudad' => 'Cochabamba'
            ],
            [
                'numero' => 9,
                'calle' => 'Calle 29 Septiembre',
                'comuna' => 'Vinto',
                'ciudad' => 'Cochabamba'
            ],
            [
                'numero' => 10,
                'calle' => 'Calle Teniente VenAvides',
                'comuna' => 'Vinto',
                'ciudad' => 'Cochabamba'
            ]
        ]);
    }
}
