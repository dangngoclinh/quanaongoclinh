<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSeoToTableProductCat extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('table_product_cat', function (Blueprint $table) {
            $table->string('keyword')->after('hienthi')->nullable();
            $table->string('description')->after('hienthi')->nullable();
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
            $table->dropColumn(['keyword', 'description']);
        });
    }
}
