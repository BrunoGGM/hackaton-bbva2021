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
            $table->date('sell_date');
            $table->decimal('amount', $precision = 12, $scale = 2);
            $table->string("authorization_number");
            $table->string("case_number");
            $table->string("contract", 15);
            $table->unsignedInteger("entity_id");
            $table->unsignedInteger("operative_id");
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
            $table->unsignedBigInteger("chargeback_type");
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
