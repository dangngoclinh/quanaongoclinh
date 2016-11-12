<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIndexColumnInTableProduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('table_product', function (Blueprint $table) {
            $table->index('id_cat');
            $table->index('spbc');
            $table->index('conhang');
            $table->index('gia');
            $table->index('giamgia');
            $table->index('hienthi');
            $table->index('luotxem');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('table_product', function (Blueprint $table) {
            //
        });
    }
}
