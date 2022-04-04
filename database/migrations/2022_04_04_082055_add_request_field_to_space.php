<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRequestFieldToSpace extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('space_registrations', function (Blueprint $table) {
            $table->boolean('requested')->nullable()->after('furnitured');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('space_registrations', function (Blueprint $table) {
            $table->dropColumn('requested');
        });
    }
}
