<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChargebacksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chargebacks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("card_id");
            $table->date('sell_date');
            $table->decimal('amount', $precision = 12, $scale = 2);
            $table->string("authorization_number");
            $table->string("case_number");
            $table->string("contract", 15);
            $table->unsignedBigInteger("entity_id");
            $table->unsignedBigInteger("operative_id");
            $table->string("buyer_name");
            $table->string("buyer_surname");
            $table->string("phone_number", 10);
            $table->string("email");
            $table->string("ip", 15);
            $table->string("street");
            $table->string("number");
            $table->unsignedBigInteger("locality_id");
            $table->unsignedBigInteger("city_id");
            $table->unsignedBigInteger("state_id");
            $table->unsignedBigInteger("country_id");
            $table->string("zip_code");
            $table->unsignedBigInteger("chargeback_types_id");

            $table->foreign('operative_id')->references('id')->on('operative_types');
            $table->foreign('entity_id')->references('id')->on('entities');
            $table->foreign('chargeback_types_id')->references('id')->on('chargeback_types');
            $table->foreign('card_id')->references('id')->on('cards');
            $table->foreign('locality_id')->references('id')->on('localities');
            $table->foreign('city_id')->references('id')->on('cities');
            $table->foreign('state_id')->references('id')->on('states');
            $table->foreign('country_id')->references('id')->on('countries');
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
        Schema::dropIfExists('chargebacks');
    }
}
