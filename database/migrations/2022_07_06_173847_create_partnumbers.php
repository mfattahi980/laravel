<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use function PHPUnit\Framework\assertNotEmpty;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Soal : function Blueprint che kari mikone ?
        Schema::create("partnumbers",function (Blueprint $table){
            $table->id();
            $table->timestamps();
            $table->string("mfg_pn",60) ;
            $table->string("clean_pn",60) ;
            $table->integer("group_id") ;
            $table->text("description") ;

        }) ;
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists("partNumbers");
    }
};
