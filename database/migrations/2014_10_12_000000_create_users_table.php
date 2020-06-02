<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('referral_id')->unsigned()->nullable()->index('fk_user-referral_idx');
            $table->string('name', 30);
            $table->string('surname', 50);
            $table->string('email', 70)->unique('email_UNIQUE');
            $table->string('password', 300);
            $table->string('phone_code', 4)->nullable();
            $table->string('phone', 20);
            $table->string('country', 3);
            $table->string('remember_token', 100)->nullable();
            $table->string('company', 100)->nullable();
            $table->string('url', 100)->nullable();
            $table->integer('status')->default(0);
            $table->boolean('locked')->default(false);
            $table->integer('step')->unsigned()->default(1);
            $table->softDeletes();
            $table->timestamps();
            $table->integer('priority')->unsigned()->default(0);
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
}
