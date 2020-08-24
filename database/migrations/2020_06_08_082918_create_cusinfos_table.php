<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCusinfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cusinfos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('admin_id')->nullable();
            $table->integer('accountno')->nullable();
            $table->string('name');
            $table->string('phone')->nullable();
            $table->string('nid')->nullable();
            $table->string('c_address')->nullable();
            $table->string('p_address')->nullable();
            $table->string('photo')->nullable();
            
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
        Schema::dropIfExists('cusinfos');
    }
}
