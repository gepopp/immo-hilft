<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;



class CreateSupportersTable extends Migration {





    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {

        Schema::create( 'supporters', function ( Blueprint $table ) {

            $table->id();
            $table->string( 'profile_photo_path' )->nullable();
            $table->string( 'link' )->nullable();
            $table->string( 'name' );
            $table->timestamps();
        } );
    }





    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {

        Schema::dropIfExists( 'supporters' );
    }
}
