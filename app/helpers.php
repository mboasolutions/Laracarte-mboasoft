<?php

if(! function_exists('page_title'))
{
    function page_title($title)
    {
        $base_title = config('app.name').' - List of artisans';

        return empty($title) ? $base_title : sprintf('%s | %s', $title, $base_title);
        /*if ($title === '') {
            return $base_title;
        }else {
            return $title . ' | ' . $base_title;
        }*/

    }
}


if(! function_exists('set_active_route'))
{
    function set_active_route($route)
    {
            return request()->routeIs($route) ? 'active' : '';
    }
}
