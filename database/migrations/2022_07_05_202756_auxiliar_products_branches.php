<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AuxiliarProductsBranches extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //creating branches table
        Schema::create('branches', function(Blueprint $table){
            $table->id();
            $table->string('branch_name', 40);
            $table->timestamps();
        });

        //product branches
        Schema::create('product_branches', function(Blueprint $table){
            $table->id();
            $table->unsignedBigInteger('branch_id');
            $table->unsignedBigInteger('product_id');
            $table->float('price' , 10 , 2);
            $table->integer('minimum_stock');
            $table->integer('maximum_stock');
        });

        //deleting columns from product once it is now a fk
        Schema::table('products', function(Blueprint $table){
            $table->dropColumn('minimum_stock');
            $table->dropColumn('maximum_stock');
            $table->dropColumn('price');
        });

        //creating constraints
        Schema::table('product_branches', function(Blueprint $table){
            $table->foreign('branch_id')->references('id')->on('branches');
            $table->foreign('product_id')->references('id')->on('products');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //droping tables
        Schema::drop('product_branches');
        Schema::drop('branches');

        //adding back the columns droped from products table
        Schema::table('products', function(Blueprint $table){
            $table->float('price', 10 , 2)->nullable();
            $table->integer('minimum_stock');
            $table->integer('maximum_stock');
        });

    }
}
