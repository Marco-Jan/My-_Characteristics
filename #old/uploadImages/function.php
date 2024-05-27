<?php
function e($string): string
{
    return htmlentities($string, ENT_QUOTES, 'UTF-8', false);
}

function scale_and_copy(string $filename, string $save_to, $max_width = 300, $max_heigth = 300): bool
{
    $width = $max_width;
    $heigth = $max_heigth;

    [$orig_width, $oriog_heigth, $mime_type] = getimagesize($filename);
    if ($orig_width === null) {
        return false;
    }

    $ratio = $orig_width / $oriog_heigth;
    if ($width / $heigth > $ratio) {
        $width = (int) round($heigth * $ratio);
    } else {
        $heigth = (int) round($width / $ratio);
    }

    $source = match ($mime_type) {
        IMAGETYPE_JPEG => imagecreatefromjpeg($filename),
        IMAGETYPE_PNG => imagecreatefrompng($filename),
        default => false,
    };

    $thumb = imagecreatetruecolor($width, $heigth);

    imagecopyresampled($thumb, $source, 0, 0, 0, 0, $width, $heigth, $orig_width, $oriog_heigth);

    match ($mime_type) {
        IMAGETYPE_JPEG => imagejpeg($thumb, $save_to),
        IMAGETYPE_PNG => imagepng($thumb, $save_to),
        default => false,
    };

    imagejpeg($thumb, $save_to);
    imagedestroy($thumb);
    imagedestroy($source);

    return true;
}
