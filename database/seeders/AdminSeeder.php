<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new User();
        $admin->first_name = 'Super';
        $admin->last_name = 'Admin';
        $admin->email = 'admin@admin.com';
        $admin->phone = '01309608232';
        $admin->password = bcrypt(12345678);
        $admin->save();
    }
}
