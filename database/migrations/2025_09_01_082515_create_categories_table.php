<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();

            // FK: categories_user_id_foreign
            $table->foreign('user_id', 'categories_user_id_foreign')
                  ->references('id')->on('users');
        });
    }

    public function down(): void {
        Schema::dropIfExists('categories');
    }
};
