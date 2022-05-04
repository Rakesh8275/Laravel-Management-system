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
            $table->bigIncrements('id');
            $table->string('product_name');
            $table->string('unit');
            $table->string('sale_price');
            $table->string('price');
            $table->string('hsnc');
            $table->string('product_code');                  
            $table->string('igst');      
            $table->string('cgst');      
            $table->string('sgst');      
            $table->string('cess');      
            $table->integer('inventory');      
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
        Schema::dropIfExists('products');
    }
}
