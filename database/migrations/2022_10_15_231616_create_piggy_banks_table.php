<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('piggy_banks', function (Blueprint $table) {
            $table->id();
            $table->float('value','10','2');
//            $table->enum('entry',[0,1])->default(0);
//            $table->enum('exit',[0,1])->default(0);
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
        Schema::dropIfExists('piggy_banks');
    }
};
