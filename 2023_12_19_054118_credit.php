<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Credit extends Migration
{
    /**
     * Run the migrations.
     * 
     * 
     * @return void
     */
    public function up()
    {
        {
            Schema::create('credit', function (Blueprint $table) {
                // $table->id(550)
                $table->string('cast')->unique();
                $table->string('adult');
                $table->id();
                $table->string('known_for_department')->unique();
                $table->string('name')->unique();
                $table->string('original_name')->unique();
                $table->string('pupularity')->unique();
                $table->string('profil_path')->unique();
                
                $table->string('character')->unique();
               
              
                $table->rememberToken();
                $table->timestamps();
            });
        }
    }

    // {
    //     "id": 550,
    //     "cast": [
    //       {
    //         "adult": false,
    //         "gender": 2,
    //         "id": 819,
    //         "known_for_department": "Acting",
    //         "name": "Edward Norton",
    //         "original_name": "Edward Norton",
    //         "popularity": 26.99,
    //         "profile_path": "/8nytsqL59SFJTVYVrN72k6qkGgJ.jpg",
    //         "cast_id": 4,
    //         "character": "The Narrator",
    //         "credit_id": "52fe4250c3a36847f80149f3",
    //         "order": 0
    //       }
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
