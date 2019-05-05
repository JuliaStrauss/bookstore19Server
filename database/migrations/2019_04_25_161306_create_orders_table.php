<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');

            $table->decimal('netAmount')->default('0.00');
            $table->integer('state')->default(0);
            //  0 = Offen
            //  1 = Bezahlt
            //  2 = Versendet
            //  3 = Storniert

            $table->timestamps();

            $table->integer('user_id')->unsigned()->default('1');
            $table->foreign('user_id')
                ->references('id')->on('users')
                ->onDelete('cascade');
        });





    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
