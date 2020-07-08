<?php

use App\Models\AdminUser;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AdminUser::create([
            'name'     => 'Admin',
            'email'    => 'shoaibhassan9800@gmail.com',
            'password' => bcrypt('qwerty_1234'),
        ]);
    }
}
