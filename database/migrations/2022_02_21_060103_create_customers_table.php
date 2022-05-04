<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('customer_name');
            $table->string('customer_code');
            $table->string('shop_name');
            $table->string('house_code');              
            $table->string('lane');      
            $table->string('area');      
            $table->string('pincode');      
            $table->string('gstin');
            $table->string('phone1');  
            $table->string('phone2');        
            $table->string('op_balance');  
            $table->string('credit_balance'); 
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
        Schema::dropIfExists('customers');
    }
}
