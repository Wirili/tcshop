<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBrandsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('brand', function (Blueprint $table) {
            $table->smallIncrements('brand_id');
            $table->string('brand_name',60)->default('')->comment('品牌名称');
            $table->string('brand_letter',60)->default('')->comment('品牌英文名称');
            $table->string('brand_logo',255)->default('')->comment('品牌图片');
            $table->text('brand_desc')->comment('品牌描述');
            $table->string('site_url',255)->default('')->comment('品牌网站');
            $table->unsignedSmallInteger('sort_order')->default(50)->comment('排序');
            $table->boolean('is_show')->default(true)->comment('是否显示');
            $table->boolean('audit_status')->default(true)->comment('是否审核');
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
        Schema::dropIfExists('brand');
    }
}
