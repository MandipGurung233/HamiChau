<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCampaingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campaings', function (Blueprint $table) {
            $table->id();
            $table->string('campaing_image');
            $table->double('campaing_goal');
            $table->double('campaing_total_amount_collected')->nullable();
            $table->text('campaing_name');
            $table->text('campaing_description');
            $table->string('documents');
            $table->string('status')->default('pending');
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('categories');

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
        Schema::dropIfExists('campaings');
    }
}
