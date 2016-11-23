<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category', function (Blueprint $table) {
            $table->smallIncrements('cat_id');
            $table->string('cat_name',90)->default('')->comment('商品类别名称');
            $table->string('keywords')->default('')->comment('关键字');
            $table->string('cat_desc')->default('')->comment('类别描述');
            $table->unsignedInteger('parent_id')->default(0)->comment('上级ID');
            $table->unsignedInteger('sort_order')->default(50)->comment('排序');
            $table->boolean('is_show')->default(true)->comment('是否显示');
            $table->string('cat_icon')->default('')->comment('类别图标');
            $table->string('cat_alias_name')->default('')->comment('类别别名');
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
        Schema::dropIfExists('category');
    }
}
