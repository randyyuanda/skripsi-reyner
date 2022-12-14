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
        Schema::create('document', function (Blueprint $table) {
            $table->bigIncrements('document_id');
            $table->text('document_name');
            $table->text('directory');
            $table->BigInteger('booking_id')->unsigned();
            $table->timestamps();
        });
        Schema::table('document', function (Blueprint $table) {
            $table->foreign('booking_id')->references('booking_id')->on('booking');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('document');
    }
};
