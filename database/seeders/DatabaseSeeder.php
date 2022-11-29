<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Blog;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->adminDefault();
    }

    public function adminDefault()
    {
        User::insert([
            [
                'name' => "Admin",
                'email' => "admin@takumi.com",
                'password' => Hash::make('takumi123'),
                'status' => User::STATUS['active'],
                'role' => User::ROLES['admin'],
            ],
        ]);
    }  
}
