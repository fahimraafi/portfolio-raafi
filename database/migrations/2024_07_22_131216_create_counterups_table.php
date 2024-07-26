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
        Schema::create('counterups', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('experience')->nullable();
            $table->string('number_of_projects')->nullable();
            $table->string('number_of_clients')->nullable();
            $table->string('retention_rate')->nullable();
            $table->string('created_by')->nullable();
            $table->string('status')->default('active');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('counterups');
    }
};
