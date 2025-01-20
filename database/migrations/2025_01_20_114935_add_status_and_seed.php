<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('task', function (Blueprint $table) {
            $table->string('status')->after('description')->default('pending');
        });

        Artisan::call('db:seed', ['--class' => 'TaskSeeder']);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
