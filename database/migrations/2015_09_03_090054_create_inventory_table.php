<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInventoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventory', function(Blueprint $table) {
            $table->increments('id');
            $table->string('name')->required();
            $table->double('units');
            $table->integer('storage_id')->references('id')->on('storages')->onDelete('cascade');
            $table->double('salesPrice');
            $table->double('retailPrice');
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
        Schema::drop('inventory');
    }
}
