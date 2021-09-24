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
            $table->string('distance');
            $table->string('renter');
            $table->string('number');
            $table->string('area');
            $table->string('earthCategory');
            $table->string('protectionCategory');
            $table->string('cutWay');
            $table->string('ozu');
            $table->string('height');
            $table->string('exposition');
            $table->string('slope');
            $table->string('erozionForm');
            $table->string('erozionDegree');
            $table->string('firstEvent');
            $table->string('percent');
            $table->string('firstPtk');
            $table->string('secondEvent');
            $table->string('secondPtk');
            $table->string('thirdEvent');
            $table->string('thirdPtk');
            $table->string('target');
            $table->string('dominantBreed');
            $table->string('bonitetClass');
            $table->string('forestType');
            $table->string('tlu');
            $table->string('fireDangeros');
            $table->string('cutYear');
            $table->string('allStump');
            $table->string('pineStump');
            $table->string('stumpDiameter');
            $table->string('cutType');
            $table->string('littering');
            $table->string('liquid');
            $table->string('deadwood');
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
