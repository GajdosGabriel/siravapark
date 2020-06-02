<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLeadsTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('leads', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('estate');
            $table->string('interested');
            $table->string('buy_from');
            $table->string('buy_to');
            $table->string('rent_from');
            $table->string('rent_to');
            $table->string('favorite');
            $table->string('comment');
            $table->string('project')->default('glamping');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('leads');
    }
}
