<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToCrmCustomersTable extends Migration
{
    public function up()
    {
        Schema::table('crm_customers', function (Blueprint $table) {
            $table->unsignedInteger('status_id')->nullable();

            $table->foreign('status_id', 'status_fk_475246')->references('id')->on('crm_statuses');
        });
    }
}