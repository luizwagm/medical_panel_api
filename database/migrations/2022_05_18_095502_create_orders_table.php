<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('invoice_code');
            $table->foreignId('id_branch_units')->constrained('branch_units');
            $table->string('guide_number');
            $table->date('date');
            $table->foreignId('id_customer')->constrained('customers');
            $table->string('claim_check');
            $table->string('invoice');
            $table->string('agreement_table');
            $table->foreignId('id_collaborator')->constrained('collaborators');
            $table->string('observation');
            $table->tinyInteger('type');
            $table->timestamps();
            $table->softDeletes();
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
