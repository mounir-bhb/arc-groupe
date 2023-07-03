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
            $tableName = 'regulateur_translations_' . $locale;
            Schema::create($tableName, function (Blueprint $table) {
                $table->id();
                $table->integer('regulateur_id');
                $table->string('locale');
                $table->text('description')->nullable();
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
        /* Schema::dropIfExists('regulateur_translations'); */
        foreach (config('app.locales') as $locale) {
            Schema::dropIfExists('regulateur_translations_' . $locale);
        }
    }
};
