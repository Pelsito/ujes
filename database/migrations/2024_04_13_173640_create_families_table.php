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
        Schema::create('families', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('gender')->required();
            $table->string('name_f1',20)->required();
            $table->string('name_f2',20)->nullable();
            $table->string('lastn_f1',20)->required();
            $table->string('lastn_f2',20)->nullable();
            $table->string('name_m1',20)->required();
            $table->string('name_m2',20)->nullable();
            $table->string('lastn_m1',20)->required();
            $table->string('lastn_m2',20)->nullable();
            $table->foreignId('user_id')->constrained('users')->cascadeOnUpdate()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('families');
    }
};
