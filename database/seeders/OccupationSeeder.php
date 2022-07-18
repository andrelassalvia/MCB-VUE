<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Occupation;

class OccupationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $occupations = [

            ['name' => 'Autônomo'],
            ['name' => 'Militar'],
            ['name' => 'Aposentado'],
            ['name' => 'Pedreiro'],
            ['name' => 'Ajudante'],
            ['name' => 'Faxineiro'],
            ['name' => 'Do lar'],
            ['name' => 'Bancário'],
        ];

        foreach ($occupations as $occupation){
            Occupation::create($occupation);
        }
    }
}
