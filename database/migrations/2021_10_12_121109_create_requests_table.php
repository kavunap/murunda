<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->integer('days');
            $table->date('start_date');
            $table->string('request_type')->default('leave');
            $table->text('purpose')->nullable();
            $table->text('results')->nullable();
            $table->string('destination')->nullable();
            $table->date('return_date');
            $table->string('m_transport')->nullable();
            $table->integer('daily_amount')->default(0);
            $table->integer('total_amount');
            $table->string('successor');
            $table->string('status')->default('pending');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();
            $table->foreign('user_id')->on('users')->references('id')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('services');
    }
}
