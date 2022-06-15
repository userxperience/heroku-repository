<?php

namespace Database\Seeders;


use App\Models\post;
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
         Post::factory(100)->create();
         (new FAQSeeder)->run();
        (new GradeSeeder)->run();
    }
}
