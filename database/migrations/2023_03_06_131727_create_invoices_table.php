<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->bigincrements('id');
            $table->string('invoice_number');
            $table->date('invoice_Date');
            $table->date('Due_date');
            $table->string('product');
            $table->unsignedBigInteger('section_id');
            $table->foreign('section_id')->references('id')->on('sections')->onDelete('cascade');
            $table->decimal('Amount_collection',8,2)->nullable();
            $table->decimal('Amount_commission',8,2);
            $table->decimal('Discount');
            $table->string('Rate_vat',999);
            $table->decimal('Value_vat',8,2);
            $table->decimal('Total',8,2);
            $table->string('Status', 50);
            $table->integer('Value_status');
            $table->text('note')->nullable();
            $table->date('Payment_Date')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invoices');
    }
}
