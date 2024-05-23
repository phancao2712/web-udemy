<?php

use Illuminate\Support\Facades\File;

function deleteFileStorage($image){
    if($image){
        $imageThumb = dirname($image).'/thumbs/'.basename($image);
        File::delete(public_path($imageThumb));
        File::delete(public_path($image));
    }
}
