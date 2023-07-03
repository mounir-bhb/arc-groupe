<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('levages', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('max_vitesse');
            $table->string('max_charge');
            $table->string('min_charge');
            $table->string('main_image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('levages');
    }
};