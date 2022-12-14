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
        Schema::create('booking', function (Blueprint $table) {
            $table->bigIncrements('booking_id');
            $table->text('pelabuhan_muat');
            $table->text('pelabuhan_tujuan');
            $table->text('final_destination');
            $table->text('vessel_name');
            $table->date('date_shipment');
            $table->text('container_no');
            $table->text('consignee');
            $table->text('shipper');
            $table->text('notify_party');
            $table->text('shipping_marks');
            $table->text('description_goods');
            $table->integer('total_nett_weight');
            $table->integer('total_gross_weight');
            $table->integer('total_measurement');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('booking');
    }
};
