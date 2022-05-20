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
            $table->tinyInteger('type')->comment('(1) Entry - (2) Output');
            $table->date('date')->nullable();
            $table->foreignId('id_branch_unit')->constrained('branch_units');
            $table->foreignId('id_customer')->constrained('customers');
            $table->string('document_number')->nullable();
            $table->string('amount')->nullable();
            $table->string('installments')->nullable();
            $table->string('first_salary')->nullable();
            $table->text('observations')->nullable();
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
