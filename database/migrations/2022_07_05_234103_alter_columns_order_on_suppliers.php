<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterColumnsOrderOnSuppliers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('suppliers', function(Blueprint $table){
            $table->dropColumn('country');
            $table->dropColumn('email');
        });

        Schema::table('suppliers', function(Blueprint $table){
            $table->string('country', 2)->after('name');
            $table->string('email', 40)->after('uf')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('suppliers', function(Blueprint $table){
            $table->dropColumn('country');
            $table->dropColumn('email');
        });
        Schema::table('suppliers', function(Blueprint $table){
            $table->string('country', 2);
            $table->string('email', 50);
        });
    }
}
