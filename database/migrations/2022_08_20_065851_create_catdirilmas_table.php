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
        Schema::create('catdirilmas', function (Blueprint $table) {
            $table->id();
            $table->string('cat_price');
            $table->string('cat_price_title');
            $table->string('cat_time');
            $table->string('cat_time_title');
            $table->string('cat_sert');
            $table->string('cat_sert_title');
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
        Schema::dropIfExists('catdirilmas');
    }
};
