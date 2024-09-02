<?php

use App\Models\Color;
use Illuminate\Support\Facades\File;

//get system setting data
function getSystemSetting($key)
{
    return \App\Models\SystemSetting::where('type', $key)->first();
}

//Get file path
//path is storage/app/
function filePath($file)
{
    return asset($file);
}


function getColor($color)
{
    return Color::where('name', $color)->first()->value ?? null;
}

//save the new language json file
function saveJSONFile($code, $data)
{
    ksort($data);
    $jsonData = json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
    file_put_contents(base_path('lang/' . $code . '.json'), stripslashes($jsonData));
}

//translate the key with json
function translate($key)
{
    $key = ucfirst(str_replace('_', ' ', $key));
    if (File::exists(base_path('lang/en.json'))) {
        $jsonString = file_get_contents(base_path('lang/en.json'));
        $jsonString = json_decode($jsonString, true);
        if (! isset($jsonString[$key])) {
            $jsonString[$key] = $key;
            saveJSONFile('en', $jsonString);
        }
    }

    return __($key);
}
