<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('MyPassword1'),
            'role' => 'admin'
        ]);

        DB::table('products')->insert([
            'name' => 'Star Wars Episode IV',
            'type' => 'DVD',
            'price' => 20.0,
            'discount' => 10,
            'available_count' => 10,
            'actors' => 'Mark Hamill, Harrison Ford',
            'directors' => 'George Lucas',
            'format' => 'Amazon Video (streaming online video)',
            'subtitles' => 'English',
            'rated' => 'PG',
            'studio' => 'Fox',
            'runtime' => 250
        ]);

        DB::table('products')->insert([
            'name' => 'Star Wars Episode V',
            'type' => 'DVD',
            'price' => 25.0,
            'discount' => 15,
            'available_count' => 5,
            'actors' => 'Mark Hamill, Harrison Ford',
            'directors' => 'George Lucas',
            'format' => 'Amazon Video (streaming online video)',
            'subtitles' => 'English',
            'rated' => 'PG',
            'studio' => 'Fox',
            'runtime' => 250
        ]);
    }
}
