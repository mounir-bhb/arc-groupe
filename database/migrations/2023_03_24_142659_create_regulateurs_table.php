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
        Schema::create('regulateurs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('diametre1');
            $table->string('diametre1_url');
            $table->string('diametre2');
            $table->string('diametre2_url');
            $table->string('diametre3');
            $table->string('diametre3_url');
            $table->string('diametre4');
            $table->string('diametre4_url');
            $table->string('diametre5');
            $table->string('diametre5_url');
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
        Schema::dropIfExists('regulateurs');
    }
};
