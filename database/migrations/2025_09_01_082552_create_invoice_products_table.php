<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('invoice_products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('invoice_id');
            $table->unsignedBigInteger('product_id');
            $table->unsignedBigInteger('user_id');
            $table->string('qty');        // VARCHAR per PDF
            $table->string('sale_price'); // VARCHAR per PDF
            $table->timestamps();

            // FKs with exact names in the PDF
            $table->foreign('invoice_id', 'invoice_products_invoice_id_foreign')
                  ->references('id')->on('invoices');

            $table->foreign('product_id', 'invoice_products_product_id_foreign')
                  ->references('id')->on('products');

            $table->foreign('user_id', 'invoice_products_user_id_foreign')
                  ->references('id')->on('users');
        });
    }

    public function down(): void {
        Schema::dropIfExists('invoice_products');
    }
};
