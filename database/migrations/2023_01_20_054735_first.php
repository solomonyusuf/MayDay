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
        Schema::create('Product', function (Blueprint $table) {
            $table->id('productId');
            $table->string('categoryId');
            $table->string('image');
            $table->string('name');
            $table->string('description', 900)->unique();
            $table->float('price')->nullable();
            $table->timestamps();
        });

        Schema::create('Category', function (Blueprint $table) {
            $table->id('categoryId');
            $table->string('image');
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('Role', function (Blueprint $table) {
            $table->id('roleId');
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('ProductCollection', function (Blueprint $table) {
            $table->id('productCollection');
            $table->string('productId');
            $table->string('categoryId');
            $table->string('image');
            $table->string('name');
            $table->string('description', 900)->unique();
            $table->float('price')->nullable();
            $table->timestamps();
        });


        Schema::create('UserRole', function (Blueprint $table) {
            $table->id('userId');
            $table->string('roleId');
            $table->timestamps();
        });

        Schema::create('Cart', function (Blueprint $table) {
            $table->id('cartId');
            $table->string('userId');
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
        //
    }
};
