<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCvsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cvs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->date('birthday');
            $table->string('position');
            $table->string('phone');
            $table->string('email');
            $table->string('facebook')->nullable();
            $table->string('skype')->nullable();
            $table->string('chatwork')->nullable();
            $table->text('address')->nullable();
            $table->longText('summary')->nullable();
            $table->string('big_image')->nullable();
            $table->string('small_image')->nullable();
            $table->longText('professional_skill_desc')->nullable();
            $table->longText('presonal_skill_desc')->nullable();
            $table->longText('work_exp_desc')->nullable();
            $table->longText('education_desc')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('cvs');
    }
}
