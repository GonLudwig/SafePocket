<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchases_products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('purchase_id')
                ->nullable(false)
                ->constrained('purchases');
            $table->foreignId('products_user_id')
                ->nullable(false)
                ->constrained('products_users');
            $table->unsignedFloat('full_value')->nullable(false);
            $table->unsignedFloat('unit_value')->nullable(false);
            $table->unsignedInteger('amount')->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('purchases_products');
    }
};