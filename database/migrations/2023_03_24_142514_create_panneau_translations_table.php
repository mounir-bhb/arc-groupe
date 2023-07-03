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
            $tableName = 'panneau_translations_' . $locale;
            Schema::create($tableName, function (Blueprint $table) {
                $table->id();
                $table->integer('panneau_id');
                $table->string('locale');
                $table->string('name')->nullable();
                $table->string('nombre_arrets')->nullable();
                $table->string('type_controle')->nullable();
                $table->string('type_entrainement')->nullable();
                $table->string('controle_groupe')->nullable();
                $table->string('communication_serie')->nullable();
                $table->string('supplementaire')->nullable();
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
        /* Schema::dropIfExists('panneau_translations'); */
        foreach (config('app.locales') as $locale) {
            Schema::dropIfExists('panneau_translations_' . $locale);
        }
    }
};
