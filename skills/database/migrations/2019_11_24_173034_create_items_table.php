<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('name');
            $table->text('it_complexity');
            $table->text('business_risk');
            $table->text('ict_components');
            $table->BigInteger('cat_id')->unsigned();
            $table->BigInteger('lev_id')->unsigned();
            $table->foreign('cat_id')->references('id')->on('categorzs');
            $table->foreign('lev_id')->references('id')->on('levels');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items');
    }
}
