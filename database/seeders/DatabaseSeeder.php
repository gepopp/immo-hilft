<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;



class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Gerhard Popp',
            'email' => 'gerhard@poppgerhard.at',
            'password' => bcrypt('181213Hgp'),
        ]);
        DB::table('users')->insert([
            'name' => 'Ronald Goigitzer',
            'email' => 'ronald.goigizter@goreeo.eu',
            'password' => bcrypt('iwat!20b22'),
        ]);
    }
}
