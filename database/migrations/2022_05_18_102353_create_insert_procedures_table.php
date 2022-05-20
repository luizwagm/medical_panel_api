<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInsertProceduresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('insert_procedures', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_order')->constrained('orders');
            $table->foreignId('id_procedure')->constrained('procedures');
            $table->string('quantity')->nullable();
            $table->string('amount')->nullable();
            $table->string('total')->nullable();
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
        Schema::dropIfExists('insert_procedures');
    }
}
