<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSlidersTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('sliders', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->string('image', 191)->nullable();
      $table->string('title', 191)->nullable();
      $table->string('description', 191)->nullable();
      $table->string('status', 191)->nullable()->default('Published');
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
    Schema::dropIfExists('sliders');
  }
}
