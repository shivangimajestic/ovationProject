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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('orderNumber')->unique();
            $table->json('orderDetails');
            $table->string('status');
            $table->timestamp('orderDate')->now();
            $table->string('paymentMode');
            $table->string('totalAmount');
            $table->unsignedBigInteger('customerId');
            $table->timestamps();

            $table->foreign('customerId')->references('id')->on('customers');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
