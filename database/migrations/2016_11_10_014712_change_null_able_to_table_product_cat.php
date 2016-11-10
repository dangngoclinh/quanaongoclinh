<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeNullAbleToTableProductCat extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('table_product_cat', function($table) {
            $table->string('photo')->nullable()->change();
            $table->string('thumb')->nullable()->change();
            $table->integer('stt')->default('0')->change();
            $table->integer('hienthi')->default('1')->change();
            $table->dropColumn(['ngaytao', 'ngaysua']);
            $table->timestampsTz();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('table_product_cat', function() {

        });
    }
}
