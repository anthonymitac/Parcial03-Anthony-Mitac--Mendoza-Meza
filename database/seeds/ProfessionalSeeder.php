<?php

use Illuminate\Database\Seeder;
use App\Professional;
use Iluminate\Support\Facades\DB;
class ProfessionalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Professional::create([
            'name'=>'Raul',
            'dni'=>'87653221',
            'profession'=>'Médico',
        ]);
        Professional::create([
            'name'=>'Garcia',
            'dni'=>'47654321',
            'profession'=>'Ingeniero de Software',
        ]);
        Professional::create([
            'name'=>'Pool',
            'dni'=>'83354321',
            'profession'=>'Dentista',
        ]);
        Professional::create([
            'name'=>'Laura',
            'dni'=>'85464521',
            'profession'=>'Diseñador Web',
        ]);
        Professional::create([
            'name'=>'Pablo',
            'dni'=>'87231321',
            'profession'=>'Albañil',
        ]);

        Professional::create([
            'name'=>'Pedro',
            'dni'=>'54634321',
            'profession'=>'Carpintero',
        ]);

    }
}
