<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
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
            
             $table->string('pro_name');
             $table->string('image');
             $table->string('category');
             $table->string('brand');
             $table->string('description');
              $table->tinyInteger('new')->default('0');


             $table->tinyInteger('status')->default('1');
             $table->integer('price');
            


            $table->timestamps();
             // $table->SoftDelets();
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
}
