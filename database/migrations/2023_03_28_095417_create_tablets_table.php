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
        Schema::create('tablets', function (Blueprint $table) {
            $table->id();
            $table->foreignId('manufacturer_id')->references('id')->on('manufacturers');
            $table->string('name',100);
            $table->double('screen_size');
            $table->integer('ram');
            $table->integer('storage');
            $table->string('mobile_network',20)->nullable();
            $table->integer('price');
            $table->integer('profit');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tablets');
    }
};
