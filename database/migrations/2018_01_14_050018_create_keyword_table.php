<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKeywordTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('keywords', function (Blueprint $table) {
            $table->increments('id');
            $table->string('keyword')->comment('关键词');
            $table->integer('show')->comment('展现量');
            $table->integer('hit')->comment('点击量');
            $table->integer('dtrade')->comment('直接交易额');
            $table->integer('indtrade')->comment('间接交易额');
            $table->integer('dcomplete')->comment('直接成交笔数');
            $table->integer('collet')->comment('宝贝收藏数');
            $table->integer('shopcollet')->comment('店铺收藏数');
            $table->integer('totalcomplete')->comment('总的成交笔数');
            $table->integer('totalamount')->comment('成交总金额');
            $table->float('ahc')->comment('平均点击量花费');
            $table->float('ior')->comment('投入产出比');
            $table->float('ccr')->comment('点击转化率');
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
        Schema::dropIfExists('keywords');
    }
}
