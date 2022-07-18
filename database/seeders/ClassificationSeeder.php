<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Classification;

class ClassificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $classifications = [
            ['name' => 'Excelente'],
            ['name' => 'Ótimo'],
            ['name' => 'Bom'],
            ['name' => 'Ruim'],
            ['name' => 'Péssimo'],
        ];

        foreach($classifications as $classification){
            Classification::create($classification);
        }
    }
}
