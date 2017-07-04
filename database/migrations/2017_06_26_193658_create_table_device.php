<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableDevice extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Check if the table device not exist
        if (!Schema::hasTable('device')) {
            Schema::create('device', function( Blueprint $table) {   
                $table->increments('id');
                //Cell phone and phone fixed
                $table->text('description');
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Destroy table device if exist
        Schema::dropIfExists('device');
    }
}
