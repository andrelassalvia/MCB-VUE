<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Country;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $countries = [ 
            [
                'name' => 'Espanha',
                'tel_code' => '+34'
            ],
            [
                'name' => 'Reino Unido',
                'tel_code' => '+44'
            ],
            [
                'name' => 'França',
                'tel_code' => '+33'
            ],
            [
                'name' => 'Portugal',
                'tel_code' => '+351'
            ],
            [
                'name' => 'Itália',
                'tel_code' => '+39'
            ],
            [
                'name' => 'Brazil',
                'tel_code' => '+55'
            ],
        ];

        foreach ($countries as $country) {
            Country::create($country);
        }
    }
}
