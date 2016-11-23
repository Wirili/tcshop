<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('goods', function (Blueprint $table) {
            $table->increments('goods_id');
            $table->unsignedSmallInteger('cat_id')->default(0)->comment('类别ID');
            $table->string('goods_sn',60)->default('')->comment('商品编号');
            $table->string('bar_code',60)->default('')->comment('商品条码');
            $table->string('goods_name',120)->default('')->comment('商品名称');
            $table->unsignedInteger('click_count')->default(0)->comment('点击数/人气');
            $table->unsignedSmallInteger('brand_id')->default(0)->comment('品牌ID');
            $table->smallInteger('goods_number')->default(0)->comment('库存数量');
            $table->smallInteger('warn_number')->default(0)->comment('警告库存');
            $table->decimal('goods_weight',10,3)->default(0)->comment('商品重量');
            $table->decimal('market_price',10,2)->default(0)->comment('市场价格');
            $table->decimal('shop_price',10,2)->default(0)->comment('商店价格');
            $table->string('keywords')->default('')->comment('关键字');
            $table->string('goods_brief')->default('')->comment('简单描述');
            $table->text('goods_desc')->comment('详细描述');
            $table->string('goods_thumb')->default('')->comment('小图');
            $table->string('goods_img')->default('')->comment('大图');
            $table->boolean('is_on_sale')->default(true)->comment('是否上架');
            $table->unsignedSmallInteger('sort_order')->default(50)->comment('排序');
            $table->boolean('is_best')->default(true)->comment('是否精品');
            $table->boolean('is_new')->default(true)->comment('是否新品');
            $table->boolean('is_hot')->default(true)->comment('是否热销');
            $table->unsignedSmallInteger('suppliers_id')->default(0)->comment('供应商ID');
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
        Schema::dropIfExists('goods');
    }
}
