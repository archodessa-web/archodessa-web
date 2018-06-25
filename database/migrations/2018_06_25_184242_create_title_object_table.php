<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTitleObjectTable extends Migration
{

    public $table = 'title_object';

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->table, function (Blueprint $table) {
            $table->bigInteger('title_id');
            $table->bigInteger('object_id');

            $table->foreign('title_id')->references('id')->on('titles')->onDelete('cascade');
            $table->foreign('object_id')->references('id')->on('objects')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists($this->table);
    }
}
