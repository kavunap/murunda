<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('user_role')->default('user');
            $table->string('title');
            $table->string('email')->unique();
            $table->string('phone');
            $table->string('prefix');
            $table->text('qualifications');
            $table->string('image');
            $table->string('signature');
            $table->string('stamp');
            // $table->string('department');
            $table->integer('annually_leave_days')->default(21);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->unsignedBigInteger('department_id');
            
            $table->rememberToken();
            $table->timestamps();
            $table->foreign('department_id')->on('departments')->references('id')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
