<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('test', function (Blueprint $table) {
           
            $table->id();
            $table->timestamps();
            
            $table->integer('name')->nullable();
            $table->float('number')->nullable();
            $table->string('aaa')->nullable();
            $table->date('ddd')->nullable();
            $table->text('ttt')->nullable();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('test');
    }
}
