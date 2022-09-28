<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(RolTableSeeder::class);
       //$this->call(UserTableSeeder::class);
        $this->call(ArchivoTipoSeeder::class);
    }
}