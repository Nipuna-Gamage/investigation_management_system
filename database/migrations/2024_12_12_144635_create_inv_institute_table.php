<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvInstituteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inv_institute', function (Blueprint $table) {
            $table->mediumIncrements('id');
            $table->string('inst_uuid', 36);
            $table->string('institute_name', 200)->nullable();
            $table->string('status', 10)->nullable(); 
            $table->dateTime('created_on')->nullable();
            $table->dateTime('updated_on')->nullable();
            $table->string('opth_1', 60)->nullable();
            $table->string('opth_2', 60)->nullable();
            $table->string('opth_3', 100)->nullable();
            $table->string('inv_log_uuid', 100)->nullable();
            $table->string('other_log_uuid', 100)->nullable();
            $table->string('other_mod', 10)->nullable();

            $table->primary(['id', 'inst_uuid']);
        });
    }
    public function down()
    {
        Schema::dropIfExists('inv_institute');
    }
}