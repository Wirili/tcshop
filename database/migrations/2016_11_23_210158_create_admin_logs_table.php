<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_log', function (Blueprint $table) {
            $table->increments('log_id');
            $table->unsignedInteger('user_id')->default(0)->comment('管理员ID');
            $table->string('log_info')->default('')->comment('日志详情');
            $table->string('ip',15)->default('')->comment('操作IP ');
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
        Schema::dropIfExists('admin_log');
    }
}
