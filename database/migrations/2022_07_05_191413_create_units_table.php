<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUnitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    //creating table units
    public function up()
    {
        Schema::create('units', function (Blueprint $table) {
            $table->id();
            $table->string('unit' , 5);
            $table->string('unit_description' , 30);
            $table->timestamps();
        });

        //altering table products to include a fk column

        Schema::table('products', function(Blueprint $table) {
            $table->unsignedBigInteger('unit_id'); //creating column unit_id on table products
            $table->foreign('unit_id')->references('id')->on('units');
        });

        Schema::table('product_details', function(Blueprint $table) {
            $table->unsignedBigInteger('unit_id'); //creating column unit_id on table products
            $table->foreign('unit_id')->references('id')->on('units');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //deleting product details fk
        Schema::table('product_details', function(Blueprint $table){
            //drop foreign
            $table->dropForeign('product_details_unit_id_foreign');
            //drop column
            $table->dropColumn('unit_id');
        });

        //deleting products fk
        Schema::table('products' , function(Blueprint $table){
            //drop foreign
            $table->dropForeign('products_unit_id_foreign');
            //drop column
            $table->dropColumn('unit_id');

        });


        Schema::dropIfExists('units');
    }
}
