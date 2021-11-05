<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company', function (Blueprint $table) {
            $table->id();
            $table->string('role')->default('1');
            $table->unsignedBigInteger('candidate_id');
            $table->string('companyName');
            $table->integer('phoneNumber');
            $table->string('level');
            $table->string('experience');
            $table->foreign('candidate_id')
                ->references('id')
                ->on('candidate')
                ->onDelete('cascade');
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
        Schema::dropIfExists('company');
    }
}
