<?php

/*
 * This file is part of the IndoRegion package.
 *
 * (c) Azis Hapidin <azishapidin.com | azishapidin@gmail.com>
 *
 */

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDistrictsTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->getTableName(), function(Blueprint $table){
            $table->char('id', 7)->index();
            $table->char('regency_id', 4);
            $table->string('name', 50);
        });
    }

    /**
     * Get table name.
     *
     * @return string
     */
    public function getTableName()
    {
        return config('indoregion.table.district');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('indoregion_districts');
    }
}
