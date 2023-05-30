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
        Schema::create('jianxing_shoes', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('sku');
            $table->string('fnsku');
            $table->integer('whinventory')->nullable();
            $table->integer('amazoninventory')->nullable();
            $table->integer('inboundorders')->nullable();
            $table->integer('totalinventory')->nullable();
            $table->decimal('thirtydayssales')->nullable();
            $table->integer('ninetydayamazon')->nullable();
            $table->decimal('coverinmonths')->nullable();
            $table->decimal('coverinmonthsinbound')->nullable();
            $table->decimal('orderquantity')->nullable();
            $table->integer('unitstoorder')->nullable();
            $table->string('needairship')->nullable();
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
        Schema::dropIfExists('jianxing_shoes');
    }
};
