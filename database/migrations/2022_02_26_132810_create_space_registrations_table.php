<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;



class CreateSpaceRegistrationsTable extends Migration {





    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {

        Schema::create( 'space_registrations', function ( Blueprint $table ) {

            $table->id();
            $table->string( 'name' );
            $table->string( 'email' );
            $table->string( 'company' );
            $table->string( 'phone' );
            $table->string( 'address' );
            $table->string( 'zip' );
            $table->string( 'city' );
            $table->string( 'country' );
            $table->integer( 'square_meter' );
            $table->integer('rooms');
            $table->date('available_from');
            $table->date('available_to')->nullable();
            $table->text('description');
            $table->text('email_verified_at')->nullable();
            $table->timestamps();
        } );
    }





    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {

        Schema::dropIfExists( 'space_registrations' );
    }
}
