<?php

// app/Models/Provider.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use MatanYadaev\EloquentSpatial\Traits\HasSpatial;
use MatanYadaev\EloquentSpatial\Objects\Point;

class Provider extends Model
{
    use HasSpatial;

    protected $spatialFields = ['location'];



}

