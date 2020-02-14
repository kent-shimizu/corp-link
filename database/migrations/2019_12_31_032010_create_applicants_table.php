<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applicants', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('applicant_name');
            $table->string('recruiting_companies');
            $table->string('portfolio_url')->nullable();
            $table->integer('occupation');
            $table->string('skill')->nullable();
            $table->string('pdf')->nullable();
            $table->integer('selection_status')->default(0);
            $table->string('interviewer')->nullable();
            $table->string('impression')->nullable();
            $table->dateTime('interview_date')->nullable();
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
        Schema::dropIfExists('applicants');
    }
}
