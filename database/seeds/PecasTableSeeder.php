<?php

use Illuminate\Database\Seeder;
use App\Pecas;

class PecasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pecas::create([
            'Cor'       => 'Rosa',
            'Marca'     => 'Marisa'
        ]);
        Pecas::create([
            'Cor'       => 'Preto',
            'Marca'     => 'Jean'
        ]);
    }
}
