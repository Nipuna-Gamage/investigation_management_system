<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvCommentTable extends Migration
{
    public function up()
    {
        Schema::create('inv_comment', function (Blueprint $table) {
            $table->mediumIncrements('id');
            $table->string('comm_uuid', 36); // UUID column
            $table->string('comment_name', 200)->nullable();
            $table->string('status', 10)->nullable();
            $table->dateTime('created_on')->nullable();
            $table->dateTime('updated_on')->nullable();
            $table->string('opth_1', 60)->nullable();
            $table->string('opth_2', 60)->nullable();
            $table->string('opth_3', 100)->nullable();
            $table->string('inv_log_uuid', 100)->nullable();
            $table->string('other_log_uuid', 100)->nullable();
            $table->string('other_mod', 10)->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('inv_comment');
    }
}
