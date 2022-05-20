<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIncomeExpensesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('income_expenses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_branch_unit')->constrained('branch_units');
            $table->foreignId('id_current_account')->constrained('current_accounts');
            $table->string('document_number')->nullable();
            $table->string('control_number')->nullable();
            $table->text('description')->nullable();
            $table->foreignId('id_customer')->constrained('customers');
            $table->foreignId('id_classification')->constrained('classifications');
            $table->date('due_date')->nullable();
            $table->date('discharge')->nullable();
            $table->string('deposit')->nullable();
            $table->string('administrate_tax')->nullable();
            $table->text('observation')->nullable();
            $table->tinyInteger('type')->comment('(1) Income - (2) Expense');
            $table->boolean('paid')->nullable();
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
        Schema::dropIfExists('income_expenses');
    }
}
