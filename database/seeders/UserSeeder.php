<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(
          [
            'name' => "test",
            'email' => "test@test.com",
            'email_verified_at' => now(),
            'password' => Hash::make('test@test.com'), // password
            'remember_token' => Str::random(10),
        ]);
    }
}
