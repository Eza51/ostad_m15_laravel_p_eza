<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('category_id');
            $table->string('name');
            $table->string('price'); 
            $table->string('unit');  
            $table->timestamps();

       
            $table->foreign('category_id', 'products_category_id_foreign')
                  ->references('id')->on('categories');

            $table->foreign('user_id', 'products_user_id_foreign')
                  ->references('id')->on('users');
        });
    }

    public function down(): void {
        Schema::dropIfExists('products');
    }
};
