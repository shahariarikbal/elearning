<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Setting;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $setting = [
            ['logo'=>'logo.png', 'phone'=>'+8801797950360', 'email'=>'support@quickteamacademy.com', 'youtube'=>'https://www.youtube.com', 'facebook'=>'https://fb.com', 'twitter'=>'https://twitter.com', 'instagram'=>'https://www.instagram.com']
        ];

        Setting::insert($setting);
    }
}
