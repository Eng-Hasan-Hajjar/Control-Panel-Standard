<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyVisitorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_visitor', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->BigInteger('company_id')->unsigned()->index();
            $table->BigInteger('visitor_id')->unsigned()->index();

            $table->foreign('company_id')->references('id')->on('companies')->onDelete('cascade');
            $table->foreign('visitor_id')->references('id')->on('visitors')->onDelete('cascade');
           
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
        Schema::dropIfExists('company_visitor');
    }
}
