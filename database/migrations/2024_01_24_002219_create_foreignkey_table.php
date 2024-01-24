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
        Schema::table('orders', function (Blueprint $table) {

            $table->foreign('user_id')->references('id')->on('users');
            // Add other columns as needed for the 'products' table
        });
        Schema::table('order_items', function (Blueprint $table) {
            $table->foreign('order_id')->references('id')->on('orders');
            $table->foreign('product_id')->references('id')->on('products');
            // Add other columns as needed for the 'products' table
        });

        Schema::table('products', function (Blueprint $table) {

            $table->foreign('merchant_id')->references('id')->on('merchants');
            // Add other columns as needed for the 'products' table
        });

        Schema::table('merchants', function (Blueprint $table) {

            $table->foreign('admin_id')->references('id')->on('users');
            $table->foreign('country_code')->references('code')->on('countries');
            // Add other columns as needed for the 'merchants' table
        });

        Schema::table('users', function (Blueprint $table) {

            $table->foreign('country_code')->references('code')->on('countries');
            // Add other columns as needed for the 'users' table
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
        Schema::dropIfExists('merchants');
        Schema::dropIfExists('users');
        Schema::dropIfExists('order_items');
        Schema::dropIfExists('orders');
    }
};
