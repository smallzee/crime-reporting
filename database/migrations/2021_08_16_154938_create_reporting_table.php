<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reporting', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('reporter_name');
            $table->string('reporter_mobile');
            $table->integer('category_id');
            $table->text('offence');
            $table->string('offence_location');
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
        Schema::dropIfExists('reporting');
    }
}
