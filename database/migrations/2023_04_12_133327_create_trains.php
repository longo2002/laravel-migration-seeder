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
        Schema::create('trains', function (Blueprint $table) {
            $table->id("id");
            $table->string("manifacturer", 50);
            $table->string("departure", 50);
            $table->string("destination", 50);
            $table->timestamp("departure_time");
            $table->timestamp("arrival_time");
            $table->int("wagon_number");
            $table->boolean("on_time");
            $table->boolean("late");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trains');
    }
};
