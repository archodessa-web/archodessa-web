<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTitleKindTable extends Migration
{

    public $table = 'title_kind';

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->table, function (Blueprint $table) {
            $table->bigInteger('title_id');
            $table->bigInteger('kind_id');

            $table->foreign('title_id')->references('id')->on('titles')->onDelete('cascade');
            $table->foreign('kind_id')->references('id')->on('kinds')->onDelete('cascade');
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
