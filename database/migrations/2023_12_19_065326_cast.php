<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Cast extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        {
            Schema::create('cast', function (Blueprint $table) {
                // $table->id(550)
                $table->id('');
                $table->string('name');
                // $table->id();
                $table->string('original_name')->unique();
                $table->string('media_type')->unique();
                $table->string('original_name')->unique();
                $table->string('pupularity')->unique();
                $table->string('profil_path')->unique();
                
                $table->string('character')->unique();
               
              
                $table->rememberToken();
                $table->timestamps();
            });
        }
        
    }
    // "adult": false,
    // "id": 224513,
    // "name": "Ana de Armas",
    // "original_name": "Ana de Armas",
    // "media_type": "person",
    // "popularity": 349.766,
    // "gender": 1,
    // "known_for_department": "Acting",
    // "profile_path": "/3vxvsmYLTf4jnr163SUlBIw51ee.jpg",
    // "known_for": [
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
