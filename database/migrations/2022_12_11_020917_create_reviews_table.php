<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('company_id')->unsigned();
            $table->foreign('company_id')->references('id')->on('brands');
            $table->integer('rating');
            $table->longText('review');
            $table->string('title');
            $table->string('user')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('dating')->nullable();
            $table->boolean('is_verified')->default(0);
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
        Schema::dropIfExists('reviews');
    }
}
