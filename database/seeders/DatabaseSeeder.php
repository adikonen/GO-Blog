<?php

namespace Database\Seeders;

use App\Models\PostCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;
 
    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            PositionSeeder::class,
            PostCategorySeeder::class,
        ]);
    }
}