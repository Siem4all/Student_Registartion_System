<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('student_id');
            $table->unsignedBigInteger('schedule_id');
            $table->unsignedBigInteger('account_id');
            $table->string('tfp_code');
            $table->string('status');
            $table->timestamps();
            $table->foreign('student_id')
              ->references('id')->on('users')->onDelete('cascade');
              $table->foreign('schedule_id')
              ->references('id')->on('schedules')->onDelete('cascade');
              $table->foreign('account_id')
              ->references('id')->on('accounts')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payments');
    }
};
