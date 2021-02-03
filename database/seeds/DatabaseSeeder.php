<?php

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

        DB::table("alternatif")->delete();
        DB::table("kriteria")->delete();
        DB::table("users")->delete();

        $this->call(UserSeeder::class);
        $this->call(KriteriaSeeder::class);
        $this->call(SubKriteriaSeeder::class);
        $this->call(AlternatifSeeder::class);
    }
}
