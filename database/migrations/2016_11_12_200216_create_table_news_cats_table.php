<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableNewsCatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_news_cats', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ten', 100);
            $table->string('tenkhongdau', 100)->index();
            $table->integer('parent_id')->index()->default(0);
            $table->string('keyword', 100)->nullable();
            $table->string('description', 200)->nullable();
            $table->text('noidung')->nullable();
            $table->timestampsTz();
            $table->foreign('parent_id')->references('id')->on('table_news_cats');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_news_cats');
    }
}
