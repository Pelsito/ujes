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
        Schema::create('schools', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('type_sch')->required();
            $table->string('level_sch')->required();
            $table->string('name_sch')->required();
            $table->string('midd_sch_c')->required();
            $table->string('state_sch')->required();
            $table->string('midd_sign_g')->required();
            $table->string('finac_sch')->required();
            $table->string('graduat_sch')->required();
            $table->string('situat')->required();
            $table->string('f_school')->nullable();
            $table->foreignId('user_id')->constrained('users')->cascadeOnUpdate()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('schools');
    }
};
