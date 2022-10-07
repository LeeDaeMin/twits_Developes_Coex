<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feeds_tweets', function (Blueprint $table) {
            $table->id();
            $table->foreignId('feeds_id')->constrained('feeds')->ondelete('cascade');
            $table->foreignId('tweets_id')->constrained('tweets')->ondelete('cascade');
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
        Schema::dropIfExists('feeds_tweets');
    }
};
