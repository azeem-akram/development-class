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
        Schema::create('product', function (Blueprint $table) {
            $table->id();

            $table->string('name');

            $table->text("description");  // Unlimited chatacter

            $table->integer('quantity');

            $table->float('price');

            $table->date('expiry_date');

            $table->dateTime('manufacturing_date');

            $table->enum('status', ['active', 'inactinve', 'discontinued']);


            $table->timestamps();

            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product');
    }
};
