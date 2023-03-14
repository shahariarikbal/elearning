<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Slider;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $slider = [
            ['title'=>'বেকারত্ব কে না বলুন দক্ষতা অর্জন করে ফ্রিল্যান্সিং এ ক্যারিয়ার গড়ুন!', 'sub_title'=>'TBS একাডেমি আপনাকে সঠিক কাজের দক্ষতা অর্জন করতে ও সফল ক্যারিয়ার গঠনে সহয়তা করে - সেটা এখন এবং ভবিষ্যতে।', 'image'=>'pic3.jpg']
        ];

        Slider::insert($slider);
    }
}
