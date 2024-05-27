<?php
function getInfoFile($url){
    $path = Storage::disk('public')->path(str_replace('storage','',$url));
    $name = basename($path);
    $size = File::size($path);

    return [
        'name' => $name,
        'size' => $size,
    ];
}

?>
