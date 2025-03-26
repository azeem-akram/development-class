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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            // Add more columns according to our needs
            // We have of datatypes string, text

            $table->string("name");
            $table->string("gender");
            $table->text("description");


            $table->timestamps();
        });


        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            // Add more columns according to our needs
            // We have of datatypes string, text

            $table->string("name");
            $table->string("gender");
            $table->text("description");


            $table->timestamps();
        });


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
        Schema::dropIfExists('teachers');
    }
};
