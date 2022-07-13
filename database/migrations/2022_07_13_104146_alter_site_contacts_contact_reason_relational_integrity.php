<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class AlterSiteContactsContactReasonRelationalIntegrity extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //add column contact_reason_id
        Schema::table('site_contacts', function(Blueprint $table){
            $table->unsignedBigInteger('contact_reason_id')->after('email');
        });

        //copying data from contact_reason to contact_reason_id
        DB::statement('UPDATE site_contacts SET contact_reason_id = contact_reason');

        //creating fk and dropping contact_reason
        Schema::table('site_contacts', function(Blueprint $table){
            $table->foreign('contact_reason_id')->references('id')->on('contact_reasons');
            $table->dropColumn('contact_reason');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //create contact_reason and dropping fk
        Schema::table('site_contacts' , function(Blueprint $table){
            $table->integer('contact_reason')->after('email');
            $table->dropForeign('site_contacts_contact_reason_id_foreign');
        });

        //copying values from contact_reason_id to contact_reason
        DB::statement('UPDATE site_contacts SET contact_reason = contact_reason_id');

        //dropping contact_reason_id
        Schema::table('site_contacts', function(Blueprint $table){
            $table->dropColumn('contact_reason_id');
        });

    }
}
