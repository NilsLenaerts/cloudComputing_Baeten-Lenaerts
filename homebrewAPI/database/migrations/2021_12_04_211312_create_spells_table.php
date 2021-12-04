<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpellsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
       Schema::create('spells', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('castingTime'); // Voegt een VARCHAR toe.   
            $table->integer('level');
            $table->string('components');
            $table->string('materials');
            $table->string('description'); // Voegt een VARCHAR toe.   
            $table->string('school');
            $table->string('range'); // Voegt een VARCHAR toe.   
            $table->string('ritual');
            $table->string('availability'); // Voegt een VARCHAR toe.   
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
        Schema::dropIfExists('spells');
    }
}
