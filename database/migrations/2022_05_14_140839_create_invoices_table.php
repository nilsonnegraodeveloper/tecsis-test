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
            $table->id();
            $table->unsignedBigInteger('client_id');
            $table->unsignedBigInteger('product_id');
            $table->integer('amount');
            $table->decimal('unit_price', 17,2);
            $table->decimal('total_price', 17,2);
            $table->timestamps();
            //constraint
            $table->foreign('client_id')->references('id')->on('clients')->onDelete(('cascade'));
            $table->foreign('product_id')->references('id')->on('products')->onDelete(('cascade'));
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
