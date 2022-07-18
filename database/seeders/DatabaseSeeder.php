<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $this->call(
            [
                BrazilStateSeeder::class,
                BrazilCitySeeder::class,
                CountrySeeder::class,
                UkCitiesSeeder::class,
                FranceCitiesSeeder::class,
                ItalyCitiesSeeder::class,
                SpainCitiesSeeder::class,
                PortugalCitiesSeeder::class,
                MaritalStatusSeeder::class,
                OccupationSeeder::class,
                ServiceTypeSeeder::class,
                ClientStatusSeeder::class,
                OrderStatusSeeder::class,
                ClassificationSeeder::class,
            ]
        );

        \App\Models\Client::factory(1000)->create();
        \App\Models\Provider::factory(1000)->create();
        \App\Models\ServiceOrder::factory(10000)->create();
        \App\Models\Comment::factory(10000)->create();
    }
}
