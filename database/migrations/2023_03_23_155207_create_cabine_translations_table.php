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
        foreach (config('app.locales') as $locale) {
            $tableName = 'cabine_translations_' . $locale;
            Schema::create($tableName, function (Blueprint $table) {
                $table->id();
                /* $table->foreignId('cabine'.$locale.'_id')->constrained()->onDelete('cascade'); */
                $table->integer('cabine_id');
                $table->string('locale');
                $table->string('back_wall')->nullable();
                $table->string('ceiling')->nullable();
                $table->string('floor')->nullable();
                $table->string('accessories')->nullable();
                $table->string('handrail')->nullable();
                $table->string('side_walls')->nullable();
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        foreach (config('app.locales') as $locale) {
            Schema::dropIfExists('cabine_translations_' . $locale);
        }
    }
};
