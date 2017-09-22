<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMpesasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('mpesas', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('conversation_id',50);
            $table->string('transaction_id',50);
            $table->string('mpesa_transaction_id',50);
            $table->float('amount', 10, 2);
            $table->boolean('status');
            $table->date('created_date');
            $table->timestamps();
            //conversation_id  transaction_id mpesa_transaction_id amount status created_date

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mpesas');
    }
}
