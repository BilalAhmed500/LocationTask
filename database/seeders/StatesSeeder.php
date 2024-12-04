<?php

// database/seeders/StatesSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\State;
use Illuminate\Support\Facades\DB;

class StatesSeeder extends Seeder
{
    public function run()
    {

        DB::table('states')->insert([
            'name' => 'California',
            'polygon' => DB::raw("ST_GeomFromText('POLYGON((-124.409591 32.534156, -114.131211 32.534156, -114.131211 42.009518, -124.409591 42.009518, -124.409591 32.534156))')"),
            'created_at' => now(),
            'updated_at' => now(),
        ]);


        DB::table('states')->insert([
            'name' => 'Texas',
            'polygon' => DB::raw("ST_GeomFromText('POLYGON((-106.645646 25.837165, -93.508292 25.837165, -93.508292 36.500704, -106.645646 36.500704, -106.645646 25.837165))')"),
            'created_at' => now(),
            'updated_at' => now(),
        ]);


        DB::table('states')->insert([
            'name' => 'New York',
            'polygon' => DB::raw("ST_GeomFromText('POLYGON((-79.76259 40.477399, -71.853171 40.477399, -71.853171 45.01585, -79.76259 45.01585, -79.76259 40.477399))')"),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
