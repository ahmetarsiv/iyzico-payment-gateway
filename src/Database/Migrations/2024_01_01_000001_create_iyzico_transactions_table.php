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
        Schema::create('iyzico_transactions', function (Blueprint $table) {
            $table->id();
            $table->string('token')->unique();
            $table->string('conversation_id')->unique();
            $table->unsignedInteger('cart_id');
            $table->unsignedInteger('customer_id');
            $table->unsignedInteger('order_id')->nullable();
            $table->string('status')->default('pending');
            $table->string('payment_id')->nullable();
            $table->string('payment_transaction_id')->nullable();
            $table->decimal('amount', 12, 2);
            $table->string('currency', 10);
            $table->timestamps();

            $table->foreign('cart_id')->references('id')->on('cart')->onDelete('cascade');
            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('iyzico_transactions');
    }
};
