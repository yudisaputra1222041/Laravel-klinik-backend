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
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            //photo
            $table->string('photo')->nullable();
            //doctor_name
            $table->string('doctor_name');
            //doctor_category
            $table->string('doctor_category');
            //doctor_phone
            $table->string('doctor_phone');
            //doctor_email
            $table->string('doctor_email');
            //sip
            $table->string('sip');
            //description
            $table->string('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doctors');
    }
};
