<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBioDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bio_data', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('age');
            $table->string('phone');
            $table->string('marital_status');
            $table->string('state');
            $table->string('local_government');
            $table->string('residential_address');
            $table->string('gender');
            $table->string('highest_education');
            $table->string('field')->nullable(); //nullable if not post graduate or graduate
            $table->string('employement_status');
            $table->string('biz_coy_name')->nullable();         //nullable if unemployed
            $table->string('biz_type_job_title')->nullable();   //nullable if unemployed
            $table->string('membership_status');
            $table->string('worker_unit')->nullable();      //nullable if membership status is member
            $table->timestamps();

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bio_data');
    }
}
