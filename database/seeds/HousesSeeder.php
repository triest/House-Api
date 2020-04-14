<?php

use Illuminate\Database\Seeder;
    use Illuminate\Support\Facades\DB;

    class HousesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('houses')->insert([
                'name' => "The Victori",
                'price' =>374662,
                'Bedrooms' => 4,
                'Bathrooms' => 2,
                'Storeys' => 2,
                'Garages' => 2,
        ]);

        DB::table('houses')->insert([
                'name' => "The Xavier",
                'price' =>513268,
                'Bedrooms' => 4,
                'Bathrooms' => 2,
                'Storeys' => 1,
                'Garages' => 2,
        ]);

        DB::table('houses')->insert([
                'name' => "The Como",
                'price' =>454990,
                'Bedrooms' => 4,
                'Bathrooms' => 3,
                'Storeys' => 2,
                'Garages' => 3,
        ]);


        DB::table('houses')->insert([
                'name' => "The Aspen",
                'price' =>384356,
                'Bedrooms' => 4,
                'Bathrooms' => 2,
                'Storeys' => 2,
                'Garages' => 3,
        ]);

        DB::table('houses')->insert([
                'name' => "The Lucretia",
                'price' =>572002,
                'Bedrooms' => 4,
                'Bathrooms' => 3,
                'Storeys' => 2,
                'Garages' => 2,
        ]);

        DB::table('houses')->insert([
                'name' => "The Toorak",
                'price' =>521951,
                'Bedrooms' => 5,
                'Bathrooms' => 2,
                'Storeys' => 1,
                'Garages' => 2,
        ]);

        DB::table('houses')->insert([
                'name' => "The Skyscape",
                'price' =>263604,
                'Bedrooms' => 3,
                'Bathrooms' => 2,
                'Storeys' =>2,
                'Garages' => 2,
        ]);

        DB::table('houses')->insert([
                'name' => "The Clifton",
                'price' =>386103,
                'Bedrooms' => 3,
                'Bathrooms' => 2,
                'Storeys' =>1,
                'Garages' => 1,
        ]);

        DB::table('houses')->insert([
                'name' => "The Geneva",
                'price' =>390600,
                'Bedrooms' => 4,
                'Bathrooms' => 3,
                'Storeys' =>2,
                'Garages' => 2,
        ]);
    }
}
