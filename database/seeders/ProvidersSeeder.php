<?php
// database/seeders/ProvidersSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Provider;
use Illuminate\Support\Facades\DB;

class ProvidersSeeder extends Seeder
{
    public function run()
    {

        DB::table('providers')->insert([
            'name' => 'Provider in California',
            'email' => 'test2@example.com',
            'description' => 'A provider located in California.',
            'location' => DB::raw("ST_GeomFromText('POINT(-118.2437 34.0522)')"),
            'created_at' => now(),
            'updated_at' => now(),
        ]);


        DB::table('providers')->insert([
            'name' => 'Provider in New York',
            'email' => 'newyork@example.com',
            'description' => 'A provider located in New York.',
            'location' => DB::raw("ST_GeomFromText('POINT(-74.0060 40.7128)')"),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('providers')->insert([
            'name' => 'Provider in California',
            'email' => 'test@example.com',
            'description' => 'A provider located in California.',
            'location' => DB::raw("ST_GeomFromText('POINT(-118.2437 34.0522)')"),
            'created_at' => now(),
            'updated_at' => now(),
        ]);


        DB::table('providers')->insert([
            'name' => 'Provider in New York',
            'email' => 'newyorkd@example.com',
            'description' => 'A provider located in New York.',
            'location' => DB::raw("ST_GeomFromText('POINT(-74.0060 40.7128)')"),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
