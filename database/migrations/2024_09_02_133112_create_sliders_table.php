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
        Schema::create('sliders', function (Blueprint $table) {
            $table->id();
            $table->longText('image');
            $table->longText('title')->nullable();
            $table->longText('sub_title')->nullable();
            $table->longText('url')->nullable();
            $table->boolean('is_published')->nullable();
            $table->timestamps();
        });

        Artisan::call("db:seed", [
            '--class' => 'SlidersTableSeeder'
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sliders');
    }
};
