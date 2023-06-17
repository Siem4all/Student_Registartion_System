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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('fname');
            $table->string('mname');
            $table->string('lname');
            $table->string('gender');
            $table->string('mobile');
            $table->date('dob');
            $table->double('height')->nullable();
            $table->json('language')->nullable();//forien key
            $table->json('profession')->nullable();//forien key
            $table->string('current_job')->nullable();//forien key
            $table->json('special_ability')->nullable();
            $table->json('ability_in_art')->nullable();
            $table->string('skin_color')->nullable();
            $table->string('special_identity')->nullable();
            $table->string('blood_type')->nullable();
            $table->string('religion')->nullable();
            $table->json('participation')->nullable();
            $table->string('photo')->nullable();//forien key
            $table->string('code')->nullable();
            $table->string('old_address')->nullable();
            $table->string('new_address')->nullable();
            $table->unsignedBigInteger('college_id');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->boolean('user_role')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            $table->foreign('college_id')
              ->references('id')->on('colleges')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
