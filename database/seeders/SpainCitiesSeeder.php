<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\City;

class SpainCitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $spainCities = [
            [
            'name' => "Álava"            ,
            'country_id' => 1
            ],
            [
            'name' => "Ávila"            ,
            'country_id' => 1
            ],
            [
            'name' => "Albacete"            ,
            'country_id' => 1
            ],
            [
            'name' => "Alicante"            ,
            'country_id' => 1
            ],
            [
            'name' => "Almería"            ,
            'country_id' => 1
            ],
            [
            'name' => "Asturias"            ,
            'country_id' => 1
            ],
            [
            'name' => "Badajoz"            ,
            'country_id' => 1
            ],
            [
            'name' => "Baleares"            ,
            'country_id' => 1
            ],
            [
            'name' => "Barcelona"            ,
            'country_id' => 1
            ],
            [
            'name' => "Bilbao"            ,
            'country_id' => 1
            ],
            [
            'name' => "Burgos"            ,
            'country_id' => 1
            ],
            [
            'name' => "Cantabria"            ,
            'country_id' => 1
            ],
            [
            'name' => "Castellón"            ,
            'country_id' => 1
            ],
            [
            'name' => "Ceuta"            ,
            'country_id' => 1
            ],
            [
            'name' => "Ciudad Real"            ,
            'country_id' => 1
            ],
            [
            'name' => "Coruña"            ,
            'country_id' => 1
            ],
            [
            'name' => "Cuenca"            ,
            'country_id' => 1
            ],
            [
            'name' => "Cáceres"            ,
            'country_id' => 1
            ],
            [
            'name' => "Cádiz"            ,
            'country_id' => 1
            ],
            [
            'name' => "Córdoba"            ,
            'country_id' => 1
            ],
            [
            'name' => "Donostia"            ,
            'country_id' => 1
            ],
            [
            'name' => "Gerona"            ,
            'country_id' => 1
            ],
            [
            'name' => "Granada"            ,
            'country_id' => 1
            ],
            [
            'name' => "Huelva"            ,
            'country_id' => 1
            ],
            [
            'name' => "Huesca"            ,
            'country_id' => 1
            ],
            [
            'name' => "Jaén"            ,
            'country_id' => 1
            ],
            [
            'name' => "Las Palmas"            ,
            'country_id' => 1
            ],
            [
            'name' => "León"            ,
            'country_id' => 1
            ],
            [
            'name' => "Lleida"            ,
            'country_id' => 1
            ],
            [
            'name' => "Lugo"            ,
            'country_id' => 1
            ],
            [
            'name' => "Madrid"            ,
            'country_id' => 1
            ],
            [
            'name' => "Melilla"            ,
            'country_id' => 1
            ],
            [
            'name' => "Murcia"            ,
            'country_id' => 1
            ],
            [
            'name' => "Málaga"            ,
            'country_id' => 1
            ],
            [
            'name' => "Navarra"            ,
            'country_id' => 1
            ],
            [
            'name' => "Orense"            ,
            'country_id' => 1
            ],
            [
            'name' => "Palencia"            ,
            'country_id' => 1
            ],
            [
            'name' => "Pontevedra"            ,
            'country_id' => 1
            ],
            [
            'name' => "Rioja"            ,
            'country_id' => 1
            ],
            [
            'name' => "Salamanca"            ,
            'country_id' => 1
            ],
            [
            'name' => "Segovia"            ,
            'country_id' => 1
            ],
            [
            'name' => "Sevilla"            ,
            'country_id' => 1
            ],
            [
            'name' => "Soria"            ,
            'country_id' => 1
            ],
            [
            'name' => "Tarragona"            ,
            'country_id' => 1
            ],
            [
            'name' => "Tenerife"            ,
            'country_id' => 1
            ],
            [
            'name' => "Teruel"            ,
            'country_id' => 1
            ],
            [
            'name' => "Toledo"            ,
            'country_id' => 1
            ],
            [
            'name' => "Valencia"            ,
            'country_id' => 1
            ],
            [
            'name' => "Valladolid"            ,
            'country_id' => 1
            ],
            [
            'name' => "Zamora"            ,
            'country_id' => 1
            ],
            [
            'name' => "Zaragoza"            ,
            'country_id' => 1
            ]
        ];

        foreach($spainCities as $city)
        {
            City::create($city);
        }
    }
}
