<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        User::factory()->create([
            'name' => 'dev',
            'username' => 'dev',
            'email' => 'dev@cc.cc',
            'role' => 'superadmin',
            'password' => bcrypt('dev'),
        ]);
        User::factory()->count(10)->create();
    }
}
