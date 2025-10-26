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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('registrant_name');
            $table->string('email')->unique();
            $table->string('father_name')->nullable();
            $table->string('mother_name')->nullable();
            $table->enum('gender', ['Male', 'Female'])->nullable();
            $table->string('telephone')->nullable();
            $table->string('mobile');
            $table->date('date_of_birth');
            $table->string('fax')->nullable();
            $table->string('occupation')->nullable();
            $table->string('country');
            $table->string('city');
            $table->string('post')->nullable();
            $table->text('address');
            $table->enum('customer_type', ['individual', 'company']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
