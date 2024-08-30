<?php

use App\Models\Color;

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
