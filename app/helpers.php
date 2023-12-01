<?php


if (!function_exists('get_setting')) {
    function get_setting($key)
    {
        return \App\Models\Setting::value($key);
    }
    
}

if (!function_exists('get_cms')) {
    function get_cms()
    {
        return \App\Models\Cms::where('show_in_footer','yes')->get();
    }
}


if (!function_exists('get_header_cms')) {
    function get_header_cms()
    {
        return \App\Models\Cms::orderBy('created_at', 'asc')->get();
    }
}
