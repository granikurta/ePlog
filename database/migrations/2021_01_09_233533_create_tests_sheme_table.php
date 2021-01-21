<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestsShemeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tests', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->string('source')->nullable();
            $table->string('other')->nullable();
            $table->string('code');
            $table->string('title');
            $table->timestamps();
        });
        Schema::create('question', function (Blueprint $table) {
            $table->id();
            $table->string('text');
            $table->unsignedBigInteger('test_id');
            $table->foreign('test_id')->references('id')->on('tests')->onDelete('cascade');
            $table->timestamps();
        });
        Schema::create('option', function (Blueprint $table) {
            $table->id();
            $table->string('text');
            $table->unsignedBigInteger('cost');
            $table->unsignedBigInteger('test_id');
            $table->foreign('test_id')->references('id')->on('tests')->onDelete('cascade');
            $table->timestamps();
        });
        Schema::create('raw_result', function (Blueprint $table) {
            $table->id();
            $table->json('answers');
            $table->unsignedBigInteger('test_id');
            $table->foreign('test_id')->references('id')->on('tests')->onDelete('cascade');
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
        Schema::dropIfExists('tests');
        Schema::dropIfExists('question');
        Schema::dropIfExists('option');
        Schema::dropIfExists('raw_result');
    }
}
