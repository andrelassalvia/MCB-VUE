<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\OrderStatus;

class OrderStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $status = [
            ['name' => 'Autorizada'],
            ['name' => 'Aguardando documentos'],
            ['name' => 'Emissão certificação digital'],
            ['name' => 'Confecção da minuta'],
            ['name' => 'Video conferência'],
            ['name' => 'Emissão da procuração'],
            ['name' => 'Encerrada']
        ];
        
        foreach ($status as $key => $value) {
            OrderStatus::create($value);
        }
    }
}
