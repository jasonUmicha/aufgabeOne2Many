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
        Schema::create('fahrers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('vorname');
            $table->string('nachname');
            $table->timestamps();
        });
        Schema::create('fahrten', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('fahrer_id');//->nullable()
            $table->string('von');
            $table->string('nach');
            $table->dateTime('startTagZeit');
            $table->integer('km');
            $table->timestamps();
            $table->foreign('fahrer_id')
                ->references('id')
                ->on('fahrers')
                ->onDelete('cascade');//set null
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fahrers');
    }
};
