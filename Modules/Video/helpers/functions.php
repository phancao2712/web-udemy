<?php
use Illuminate\Support\Facades\Storage;

function getInfoVideo($url){
    if(!empty($url)){
        $getID3 = new getID3();
        $path = Storage::disk('public')->path(str_replace('storage','',$url));
        $file = $getID3->analyze($path);
        return $file;
    }
    return null;
}
?>
