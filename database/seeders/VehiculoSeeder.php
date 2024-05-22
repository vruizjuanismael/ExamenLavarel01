<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Vehiculo;

class VehiculoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 100; $i++) {
            Vehiculo::create([
                'placa' => 'DEF' . rand(100, 999), 
                'modelo' => 'Modelo ' . rand(2000, 2022), 
                'propietario' => 'Propietario ' . rand(1, 10),
            ]);
        }
    }
}
