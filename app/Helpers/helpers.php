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

/**
 * Get a star rating from a 0-100 rating
 *
 * @param int $percent
 * @return float|int
 */
function star_rating($percent)
{
    return ($percent) / 20;
}

?>
