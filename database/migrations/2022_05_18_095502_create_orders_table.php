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
            $table->string('invoice_code')->nullable();
            $table->foreignId('id_branch_unit')->constrained('branch_units');
            $table->string('guide_number')->nullable();
            $table->date('date')->nullable();
            $table->foreignId('id_customer')->constrained('customers');
            $table->string('claim_check')->nullable();
            $table->string('invoice')->nullable();
            $table->string('agreement_table')->nullable();
            $table->foreignId('id_collaborator')->constrained('collaborators');
            $table->string('observation')->nullable();
            $table->tinyInteger('type')->comment('(1) Budget - (2) Invoice');
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
