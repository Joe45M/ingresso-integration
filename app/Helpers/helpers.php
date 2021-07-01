<?php

/**
 * Truncate a string to 120 characters.
 *
 * @param $string
 * @return string
 */
function truncate_string($string, $length = 200): string
{
    return \Illuminate\Support\Str::limit($string, $length, '...');
}

?>
