<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVolunteerEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('volunteer_events', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('volunteereventable_id')->nullable();
            $table->string('volunteereventable_type')->nullable();
            $table->unsignedBigInteger('volunteercategory_id')->nullable();
            $table->string('name');
            $table->dateTime('date_time');
            $table->text('details')->nullable();
            $table->boolean('attended')->nullable();
            $table->text('notes')->nullable();
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
        Schema::dropIfExists('volunteer_events');
    }
}
