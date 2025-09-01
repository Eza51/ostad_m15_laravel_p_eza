<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->nullable();
            $table->string('mobile')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->timestamps();

            // FK: customers_user_id_foreign
            $table->foreign('user_id', 'customers_user_id_foreign')
                  ->references('id')->on('users');
        });
    }

    public function down(): void {
        Schema::dropIfExists('customers');
    }
};
