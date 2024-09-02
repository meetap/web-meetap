<?php

namespace Database\Seeders;

use App\Models\Slider;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SlidersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $slidersData = [
            [
                'id' => 1,
                'image' => 'uploads/slider/A1M6f36uzdGHw6VUPWUk1ti9IFtiykT8ZQtqIRQ9.jpeg',
                'title' => 'Meetap, best programming community',
                'sub_title' => 'Find your passion and start coding',
                'url' => NULL,
                'is_published' => 1,
                'created_at' => NULL,
                'updated_at' => '2024-09-02 08:55:53',
            ],
        ];

        foreach ($slidersData as $sliderData) {
            Slider::create($sliderData);
        }
    }
}
