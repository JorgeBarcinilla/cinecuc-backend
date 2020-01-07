<?php

use Illuminate\Database\Seeder;
use Faker\Factory  as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $faker = Faker::create();
        foreach (range(1,10) as $index) {
            DB::table('movie')->insert([
                'name' => $faker->name,
                'description' => $faker->text($maxNbWo = 200),
                'genre' => $faker->text($maxNbChars = 15),
                'director' => $faker->name
            ]);
            DB::table('user')->insert([
                'name' => $faker->name,
                'email' => $faker->unique()->safeEmail,
                'rol' => $faker->word($maxNbChars = 15),
                'email_verified_at' => now(),
                'password' => bcrypt('secret'), // password
                'remember_token' => Str::random(10)
            ]);
            DB::table('show')->insert([
                'movie_id' => $faker->numberBetween(1,$index),
                'date_start' => $faker->dateTime,
                'date_end' => $faker->dateTime,
                'site' => $faker->city,
                'address' => $faker->address,
                'capacity' => $faker->numberBetween($min = 1, $max = 30)
            ]);
            DB::table('ticket')->insert([
                'show_id' => $faker->numberBetween(1,$index),
                'user_id' => $faker->numberBetween(1,$index)
            ]);
            }

    }
}
