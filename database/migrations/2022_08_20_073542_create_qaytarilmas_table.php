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
        Schema::create('qaytarilmas', function (Blueprint $table) {
            $table->id();
            $table->string('qayda_1');
            $table->string('qayda_2');
            $table->string('qayda_3');
            $table->string('qayda_4');
            $table->string('qayda_5');
            $table->string('qayda_6');
            $table->string('qayda_7');
            $table->string('qayda_8');
            $table->string('qayda_9');
            $table->string('qayda_10');
            $table->string('qayda_11');
            $table->string('qayda_12');
            $table->string('qayda_13');
            $table->string('qayda_14');
            $table->string('qayda_15');
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
        Schema::dropIfExists('qaytarilmas');
    }
};
