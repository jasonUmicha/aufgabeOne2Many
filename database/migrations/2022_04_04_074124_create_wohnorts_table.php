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
        Schema::create('wohnorts', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('fahrer_id');
            $table->string('ort');
            $table->integer('plz');
            $table->timestamps();
            $table->foreign('fahrer_id')
                ->references('id')
                ->on('fahrers')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('wohnorts');
    }
};
