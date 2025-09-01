<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->string('total');    // VARCHAR per PDF
            $table->string('discount')->nullable();
            $table->string('vat')->nullable();
            $table->string('payable');  // VARCHAR per PDF
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('customer_id');
            $table->timestamps();

            // FKs with exact names in the PDF
            $table->foreign('user_id', 'invoices_user_id_foreign')
                  ->references('id')->on('users');

            $table->foreign('customer_id', 'invoices_customer_id_foreign')
                  ->references('id')->on('customers');
        });
    }

    public function down(): void {
        Schema::dropIfExists('invoices');
    }
};
