<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_order')->constrained('orders');
            $table->foreignId('id_form_payment')->constrained('form_payments');
            $table->date('due_date')->nullable();
            $table->string('number_control')->nullable();
            $table->text('description')->nullable();
            $table->string('installments')->nullable();
            $table->string('amount')->nullable();
            $table->timestamps();
            $table->SoftDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payments');
    }
}
