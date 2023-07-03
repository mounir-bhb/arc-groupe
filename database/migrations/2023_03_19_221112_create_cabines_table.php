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
        /* foreach (config('app.locales') as $locale) {
            $tableName = 'cabines_' . $locale; */
            Schema::create('cabines', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->string('main_image');
                $table->string('plafond_image');
                $table->string('paroi_image');
                $table->string('sol_image');
                $table->timestamps();
            });
        /* } */
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        /* foreach (config('app.locales') as $locale) {
            Schema::dropIfExists('cabines_' . $locale);
        } */
        Schema::dropIfExists('cabines');
    }
};
