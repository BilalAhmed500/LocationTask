<?php

// app/Http/Controllers/ProviderController.php

namespace App\Http\Controllers;

use App\Models\Provider;
use App\Models\State;
use Illuminate\Http\Request;
use Str;
use Illuminate\Support\Facades\DB;

class ProviderController extends Controller
{
    /**
     * Get providers by state (using polygons).
     */
    public function getProvidersByState(Request $request, $state_id)
    {

        // $this->addProviders();
        // dd('done');
        $stateId = $state_id;
        $state = DB::table('states')
            ->select(DB::raw('ST_AsText(polygon) as polygon'))
            ->where('id', $stateId)
            ->first();

        // dd($state);
        if (!$state) {
            return response()->json(['message' => 'State not found'], 404);
        }


        $providers = Provider::whereRaw(
            "ST_Within(location, ST_GeomFromText(?))",
            [$state->polygon]
        )->get()->toArray();
        dd($providers);
    }

    public function addProviders()
    {
        $rand = rand(1, 5000);
        DB::table('providers')->insert([
            'name' => 'Provider in California',
            'email' => $rand . '@example.com',
            'description' => 'A provider located in California.',
            'location' => DB::raw("ST_GeomFromText('POINT(-119.417931 36.778259)')"),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
