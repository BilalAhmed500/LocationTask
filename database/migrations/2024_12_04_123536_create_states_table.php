<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('states', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->polygon('polygon');
            $table->timestamps();
        });


        DB::statement('ALTER TABLE states ADD SPATIAL INDEX(polygon)');
    }

    public function down()
    {
        Schema::dropIfExists('states');
    }
};
