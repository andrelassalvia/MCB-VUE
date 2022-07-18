<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ClientStatus;

class ClientStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $status = [
            ['name' => 'potential'],
            ['name' => 'inactive'],
            ['name' => 'withOrder'],
            ['name' => 'done'],
        ];

        foreach ($status as $value) {
            ClientStatus::create($value);
        }
    }
}
