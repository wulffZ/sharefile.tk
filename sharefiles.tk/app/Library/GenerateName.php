<?php


namespace App\Library;

class GenerateName
{
    public static function generateName() {
        $imageName = strval(microtime());
        $imageName = str_replace(' ', '', $imageName);
        $imageName = str_replace('0.', '', $imageName);
        return $imageName;
    }
}
