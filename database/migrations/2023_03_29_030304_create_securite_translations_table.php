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
            $tableName = 'securite_translations_' . $locale;
            Schema::create($tableName, function (Blueprint $table) {
                $table->id();
                $table->integer('securite_id');
                $table->string('locale');
                $table->string('type_rails')->nullable();
                $table->string('normes_directive')->nullable();
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
        /* Schema::dropIfExists('securite_translations'); */
        foreach (config('app.locales') as $locale) {
            Schema::dropIfExists('securite_translations_' . $locale);
        }
    }
};
