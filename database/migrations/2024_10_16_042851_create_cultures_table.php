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
        Schema::create('cultures', function (Blueprint $table) {
            $table->id();
            $table->String('image');
            $table->String('name');
            $table->String('headingSatu')->nullable();
            $table->text('descSatu')->nullable();
            $table->String('headingDua')->nullable();
            $table->text('descDua')->nullable();
            $table->text('subDescDua')->nullable();
            $table->String('headingTiga')->nullable();
            $table->text('descTiga')->nullable();
            $table->text('subDescTiga')->nullable();
            $table->String('lokasi')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cultures');
    }
};
