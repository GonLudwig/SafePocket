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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable(false);
            $table->foreignId('brand_id')->nullable()->constrained('brands');
            $table->unsignedFloat('value')->nullable(false);
            $table->unsignedFloat('max_value')->nullable(false);
            $table->unsignedFloat('min_value')->nullable(false);
            $table->timestamps();
            $table->index(['name', 'brand_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};