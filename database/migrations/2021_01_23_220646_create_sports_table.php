<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sports', function (Blueprint $table) {
            $table->id();
            $table->string('es_sport')->nullable();
            $table->string('es_comment')->nullable();
            $table->string('jhs_sport')->nullable();
            $table->string('jhs_comment')->nullable();
            $table->string('hs_sport')->nullable();
            $table->string('hs_comment')->nullable();
            $table->string('co_sport')->nullable();
            $table->string('co_comment')->nullable();
            $table->foreignId('user_id')->constrained('users');
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
        Schema::dropIfExists('sports');
    }
}
