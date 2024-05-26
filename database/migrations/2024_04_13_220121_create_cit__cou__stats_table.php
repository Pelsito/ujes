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
        Schema::create('countries', function (Blueprint $table) 
        {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->string('name_cont')->required();
            $table->timestamps();
        });

        Schema::create('states', function (Blueprint $table) 
        {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->string('name_stat')->required();
            $table->foreignId('count_id')->constrained('countries')->cascadeOnUpdate()->cascadeOnDelete();
            $table->timestamps();
        });

        Schema::create('cities', function (Blueprint $table) 
        {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->string('name_citi')->required();
            $table->foreignId('stat_id')->constrained('states')->cascadeOnUpdate()->cascadeOnDelete();
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //Schema::dropIfExists('cit__cou__stats');
        Schema::dropIfExists('countries');
        Schema::dropIfExists('states');
        Schema::dropIfExists('cities');
    }
};
