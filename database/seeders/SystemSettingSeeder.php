<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\SystemSetting;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SystemSettingSeeder extends Seeder
{
    public function run()
    {
        $settings = [
            [1, 'default_currencies', '1', null, null],
            [2, 'type_logo', 'uploads/site/header.png', null, null],
            [3, 'type_name', 'Web Meetap', null, '2020-12-09 03:14:50'],
            [4, 'type_footer', 'Web Meetap', null, '2020-12-09 03:14:50'],
            [5, 'type_mail', 'web_meetap@mail.com', null, '2020-12-09 03:14:50'],
            [6, 'type_address', 'Jawa Barat. Indonesia', null, '2020-12-09 03:14:50'],
            [7, 'type_fb', 'facebook.com', null, '2020-12-09 03:14:50'],
            [8, 'type_tw', 'twitter.com', null, '2020-12-09 03:14:50'],
            [9, 'type_number', '0123456789', null, '2020-12-09 03:14:50'],
            [10, 'type_google', 'google.com', null, '2020-12-09 03:14:50'],
            [11, 'footer_logo', 'uploads/site/footer.png', null, null],
            [12, 'favicon_icon', 'uploads/site/icon.png', null, null],
            [13, 'default_currencies', '1', null, null],
            [14, 'type_logo', '', null, null],
            [15, 'type_name', '', null, null],
            [16, 'type_footer', '', null, null],
            [17, 'type_mail', '', null, null],
            [18, 'type_address', '', null, null],
            [19, 'type_fb', '', null, null],
            [20, 'type_tw', '', null, null],
            [21, 'type_number', '', null, null],
            [22, 'type_google', '', null, null],
            [23, 'footer_logo', '', null, null],
            [24, 'favicon_icon', '', null, null],
            [25, 'affiliate', 'Active', null, '2020-07-22 22:36:50'],
            [26, 'commission', '1', null, null],
            [27, 'withdraw_limit', '10', null, null],
            [28, 'cookies_limit', '10', null, null],
        ];
        foreach ($settings as $setting) {
            SystemSetting::create([
                'id' => $setting[0],
                'type' => $setting[1],
                'value' => $setting[2],
                'created_at' => $setting[3] ? Carbon::parse($setting[3]) : null,
                'updated_at' => $setting[4] ? Carbon::parse($setting[4]) : null,
            ]);
        }
    }
}
