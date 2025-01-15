<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('country', function (Blueprint $table) {
            $table->id();
            $table->string('name');
        });

        Artisan::call('db:seed', ['--class' => 'CountrySeeder']);

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
