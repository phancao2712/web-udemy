<?php

use Illuminate\Support\Facades\File;

function deleteFileStorage($image)
{
    if ($image) {
        $imageThumb = dirname($image) . '/thumbs/' . basename($image);
        File::delete(public_path($imageThumb));
        File::delete(public_path($image));
    }
}

function setSideBarActive(array $routes): ?string
{
    foreach ($routes as $route) {
        if (request()->routeIs($route)) {
            return 'show';
        }
    }
    return null;
}

function setMenuActive(array $routes): ?string
{
    foreach ($routes as $route) {
        if (request()->routeIs($route)) {
            return 'active';
        }
    }
    return null;
}
