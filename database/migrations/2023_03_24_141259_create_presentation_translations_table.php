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
            $tableName = 'presentation_translations_' . $locale;
            Schema::create($tableName, function (Blueprint $table) {
                $table->id();
                $table->integer('presentation_id');
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
        /* Schema::dropIfExists('presentation_translations'); */
        foreach (config('app.locales') as $locale) {
            Schema::dropIfExists('presentation_translations_' . $locale);
        }
    }
};
