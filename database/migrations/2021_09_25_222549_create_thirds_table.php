<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateThirdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('thirds', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('card_id');
            $table->foreign('card_id')
                ->references('id')
                ->on('cards');
            $table->integer('thousands')->nullable();
            $table->integer('height')->nullable();
            $table->integer('age')->nullable();
            $table->integer('koefOne')->nullable();
            $table->string('podrostOne')->nullable();
            $table->integer('koefTwo')->nullable();
            $table->string('podrostTwo')->nullable();
            $table->integer('koefThree')->nullable();
            $table->string('podrostThree')->nullable();
            $table->string('por')->nullable();
            $table->string('Oc')->nullable();
            $table->string('density')->nullable();
            $table->string('podlesokOne')->nullable();
            $table->string('podlesokTwo')->nullable();
            $table->string('podlesokThree')->nullable();
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
        Schema::dropIfExists('thirds');
    }
}
