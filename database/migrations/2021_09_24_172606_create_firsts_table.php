<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFirstsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('firsts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('card_id');
            $table->foreign('card_id')
                ->references('id')
                ->on('cards');
            $table->string('Republic');
            $table->string('district');
            $table->string('region');
            $table->string('quarter');
            $table->string('distance')->nullable();
            $table->string('renter')->nullable();
            $table->string('number')->nullable();
            $table->string('area');
            $table->string('earthCategory');
            $table->string('protectionCategory');
            $table->string('cutWay')->nullable();
            $table->string('ozu')->nullable();
            $table->string('height')->nullable();
            $table->string('exposition')->nullable();
            $table->string('slope')->nullable();
            $table->string('erozionForm')->nullable();
            $table->string('erozionDegree')->nullable();
            $table->string('firstEvent')->nullable();
            $table->string('percent')->nullable();
            $table->string('firstPtk')->nullable();
            $table->string('secondEvent')->nullable();
            $table->string('secondPtk')->nullable();
            $table->string('thirdEvent')->nullable();
            $table->string('thirdPtk')->nullable();
            $table->string('target')->nullable();
            $table->string('dominantBreed');
            $table->string('bonitetClass');
            $table->string('forestType');
            $table->string('tlu');
            $table->string('fireDangeros')->nullable();
            $table->string('cutYear')->nullable();
            $table->string('allStump')->nullable();
            $table->string('pineStump')->nullable();
            $table->string('stumpDiameter')->nullable();
            $table->string('cutType')->nullable();
            $table->string('littering')->nullable();
            $table->string('liquid')->nullable();
            $table->string('deadwood')->nullable();
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
        Schema::dropIfExists('firsts');
    }
}
