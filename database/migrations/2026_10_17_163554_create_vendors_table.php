
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('vendors', function (Blueprint $table) {
            $table->id();

            // Required fields
            $table->string('full_name', 100);
            $table->string('email')->unique();
            $table->string('password');

            // Optional vendor details
            $table->string('phone', 20)->nullable();
            $table->string('address')->nullable();
            $table->string('id_number')->nullable();
            $table->string('business_name')->nullable();
            $table->string('business_type')->nullable();

            // Optional payment details
            $table->string('bank_account_no')->nullable();
            $table->string('payment_method')->nullable();

            // Optional profile image
            $table->string('image')->nullable();

            // Default status
            $table->string('status')->default('unverified');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('vendors');
    }
};
