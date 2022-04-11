<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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
                    'name' => Str::random(10),
                    'email' => Str::random(10).'@gmail.com',
                    'password' => Hash::make('password'),
                ]);
                  DB::table('client')->insert([
                             'nom' => Str::random(10),
                             'prenom' => Str::random(10).'@gmail.com',
                             'num_tel' => Str::random(10),
                             'email' => Str::random(10).'@gmail.com',
                         ]);
                                    DB::table('activities')->insert([
                                               'nom' => Str::random(10),
                                               'description' => Str::random(10).'@gmail.com',

                                           ]);
    }
}
