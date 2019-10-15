<?php

use Illuminate\Database\Seeder;
use App\Cliente;

class ClientesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cliente::create([
            'nome'     => 'Melissa',
            'telefone' => '54 99204-0567',
            'email'    => 'melissaklain@gmail.com',
            'endereço' => 'Odila, 313',
            'CPF'      => '12345678901',
            'RG'       => '12345678901',
            'GOSTO'      => 'bla'
        ]);
        Cliente::create([
            'nome'     => 'Raquel',
            'telefone' => '54 99150-890',
            'email'    => 'raquelguedes@gmail.com',
            'endereço' => 'Centro, 134',
            'CPF'      => '12345678901',
            'RG'       => '12345678901',
            'GOSTO'      => 'bla'
        ]);

    }
}
