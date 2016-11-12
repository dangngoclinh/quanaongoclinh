<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIndexToTableProductCat extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('table_product_cat', function (Blueprint $table) {
            $table->index('parent_id');
            $table->index('tenkhongdau');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('table_product_cat', function (Blueprint $table) {
            $table->dropIndex('table_product_cat_parent_id_index');
            $table->dropIndex('table_product_cat_tenkhongdau_index');
        });
    }
}
