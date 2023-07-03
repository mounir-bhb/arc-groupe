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
            $tableName = 'porte_translations_' . $locale;
            Schema::create($tableName, function (Blueprint $table) {
                $table->id();
                /* $table->integer('image_id'); */
                $table->integer('porte_id');
                $table->string('locale');
                $table->string('name')->nullable();
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
        /* Schema::dropIfExists('porte_translations'); */
        foreach (config('app.locales') as $locale) {
            Schema::dropIfExists('porte_translations_' . $locale);
        }
    }
};
