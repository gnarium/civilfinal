<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrivatejobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('privatejobs', function (Blueprint $table) {
            $table->id();
            $table->string('jobname');
            $table->string('branch');
            $table->string('eligibility');
            $table->string('companyname');
            $table->dateTime('lastdate');   
            $table->string('describtion');
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
        Schema::dropIfExists('privatejobs');
    }
}
