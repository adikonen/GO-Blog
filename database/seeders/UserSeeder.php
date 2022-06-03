<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            "name" => "tukang ngopi",
            "password" => "bal1d3v!",
            "email" => "araksimpen@gmail.com",
            "position_id" => 2,    
        ]);
    }
}
