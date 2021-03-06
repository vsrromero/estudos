<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_id');
            $table->text('description');
            $table->float('wheight', 8 , 2)->nullable();
            $table->float('height', 8 , 2)->nullable();
            $table->float('depth', 8 , 2)->nullable();
            $table->timestamps();

            //relationship constraint - foreign key
            $table->foreign('product_id')->references('id')->on('products');
            $table->unique('product_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //drop fk
        Schema::table('product_details' , function(Blueprint $table){
            $table->dropForeign('product_details_product_id_foreign');
        });
        Schema::dropIfExists('product_details');
    }
}
