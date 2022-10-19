<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products_users', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')
                ->nullable(false)
                ->constrained('products');
            $table->foreignId('user_id')
                ->nullable(false)
                ->constrained('users');
            $table->unsignedFloat('value')->nullable(false);
            $table->unsignedFloat('max_value')->nullable(false);
            $table->unsignedFloat('min_value')->nullable(false);
            $table->timestamps();
            $table->index(['product_id', 'user_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products_users');
    }
}
