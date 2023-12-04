<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

function isActive($route)
{
    return request()->routeIs($route) ? true : false;
}

function underscoreToTitleCase($string)
{
    // Replace underscores with spaces
    $string = str_replace('_', ' ', $string);

    // Capitalize each word
    return ucwords($string);
}

function dotToTitleCase($string)
{
    // Replace underscores with spaces
    $string = str_replace('.', ' ', $string);

    // Capitalize each word
    return ucwords($string);
}

function getCurrentPageName()
{
    // Get the current route name
    $routeName = Route::currentRouteName();

    // Check if the route name is not null and not empty
    if (!empty($routeName)) {
        // Convert to title case and return
        return Str::title(str_replace('-', ' ', $routeName));
    }

    // If route name is not available, return the APP_NAME from .env
    return env('APP_NAME', 'Default App Name');
}
