<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('radios', function (Blueprint $table) {
            $table->id();
            $table->string('town_name', 191);
            $table->foreign('town_name')->references('name')->on('towns')->onDelete('cascade');
            $table->float('frequency');
            $table->float('power')->nullable();
            $table->string('name');
            $table->string('address')->nullable();
            $table->timestamps();
        });

    }


    public function down()
    {
        Schema::dropIfExists('radios');
    }
};
