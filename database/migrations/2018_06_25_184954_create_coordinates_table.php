<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoordinatesTable extends Migration
{

    public $table = 'coordinates';

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->table, function (Blueprint $table) {
            $table->decimal('latitude', 10, 6);
            $table->decimal('longitude', 10, 6);
            $table->bigInteger('object_id');

            $table->primary(['object_id', 'latitude', 'longitude']);
            $table->foreign('title_id')->references('id')->on('titles')->onDelete('cascade');
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
