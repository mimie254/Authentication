<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $faker = Faker::create();
        foreach(range(1,100) as $index)
        {
            DB::table('authors')->insert([
                'name'=>$faker->name,
                'nationality'=>$faker->nationality,
                'no_of_books_published'=>$faker->no_of_books_published,
                'awards_won'=>$faker->awards_won,
                'best_selling_book'=>$faker->best_selling_book,
                'reviews'=>$faker->reviews,
                'decoded_status'=>$faker->decoded_status,

                 
            ]);
        }
    }
}
