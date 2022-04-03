<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SpaceDonationsChecks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('space_registrations', function (Blueprint $table) {
            $table->boolean('furnitured')->default(false)->after('rooms');
            $table->boolean('freerent')->default(false)->after('rooms');
            $table->boolean('exclusiv')->default(false)->after('rooms');
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
            $table->dropColumn('furnitured');
            $table->dropColumn('freerent');
            $table->dropColumn('exclusiv');
        });
    }
}
