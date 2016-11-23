<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGoodsGalleriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('goods_gallery', function (Blueprint $table) {
            $table->increments('img_id');
            $table->unsignedInteger('goods_id')->comment('商品ID');
            $table->string('img_url')->default('')->comment('大图');
            $table->string('thumb_url')->default('')->comment('小图');
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
        Schema::dropIfExists('goods_gallery');
    }
}
