<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class AdminSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      
            User::create([
                
                'name' => 'Admin Admin',
                'email' => 'admin@gmail.com',
                'username' => 'Media Creator',
                'role' => 'Admin',
                'password' => bcrypt('#123456'),
                'email_verified_at' => null,
                'remember_token' => Str::random(10),
            ]);
      
    }
}
