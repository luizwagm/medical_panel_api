<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInventoryStocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventory_stocks', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('type')->comment();
            $table->date('date');
            $table->foreignId('id_branch_unit')->constrained('branch_units');
            $table->foreignId('id_customer')->constrained('customers');
            $table->string('document_number');
            $table->string('amount');
            $table->string('installments');
            $table->string('first_salary');
            $table->text('observations');
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
        Schema::dropIfExists('inventory_stocks');
    }
}
