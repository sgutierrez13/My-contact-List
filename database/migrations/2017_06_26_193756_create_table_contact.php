<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableContact extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Check if the table contact not exist
        if (!Schema::hasTable('contact')) {
            Schema::create('contact', function( Blueprint $table) {   
                $table->increments('id');
                $table->text('name');
                $table->text('surname');
                $table->text('email');
                $table->integer('id_device')->unsigned();
                $table->text('address');
                $table->text('contact_number');
                $table->timestamps();
            });
            Schema::table('contact', function (Blueprint $table) {
                $table->foreign('id_device')->references('id')->on('device');
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
        //Destroy table contact if exist
        Schema::dropIfExists('contact');
    }
}
