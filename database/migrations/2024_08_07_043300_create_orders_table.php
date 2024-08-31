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
            $table->string('order_no')->nullable(true);
            $table->integer('customer_id')->nullable(false);
            $table->text('order_details')->nullable(false);
            $table->enum('payment_mode', ['CC', 'DC', 'UPI', 'COD'])->default('COD')->nullable(false);
            $table->text('order_note')->nullable(true); //65K
            $table->timestamps();
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
