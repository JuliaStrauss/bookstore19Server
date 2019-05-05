<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orderlogs', function (Blueprint $table) {
            $table->increments('id');

            $table->string('username');

            $table->string('comment')->default('Wir haben Ihre Bestellung erhalten');
            $table->string('adminComment');

            $table->integer('state')->default('0'); //default = offen
            //  0 = Offen
            //  1 = Bezahlt
            //  2 = Versendet
            //  3 = Storniert

            $table->timestamps();

            $table->integer('order_id')->unsigned()->nullable();
            $table->foreign('order_id')
                ->references('id')->on('orders')
                ->onDelete('set null');

        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_logs');
    }
}
