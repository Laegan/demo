<?php

namespace App\Helpers;

use App\Post;
use Carbon\Carbon;

class WelcomHelper
{
    public static function format_date($post)
    {
        if ($post->start_at != null)
            return 'Date :' . $post->start_at->format('d/m/y H:i');
        else
            return '<strong>Non définie</strong>';
    }

    public static function input_date($post)
    {
        if ($post->start_at != null)
            return Carbon::parse($post->start_at)->format('Y-m-d\TH:i');
        else
            return '';
    }

    public static function input_body($post)
    {
        if ($post->body != null)
            return $post->body;
        else
            return '';
    }
}
