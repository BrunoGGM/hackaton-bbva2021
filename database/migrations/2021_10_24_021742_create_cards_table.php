<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cards', function (Blueprint $table) {
            $table->id();
            $table->string("card_number", 16);
            $table->string("cardholder");
            $table->unsignedBigInteger("card_type_id");
            $table->unsignedBigInteger("national_id");
            $table->foreign('card_type_id')->references('id')->on('card_types');
            $table->foreign('national_id')->references('id')->on('nationals');
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
        Schema::dropIfExists('cards');
    }
}
