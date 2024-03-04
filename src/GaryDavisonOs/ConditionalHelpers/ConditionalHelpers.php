<?php

namespace GaryDavisonOs\ConditionalHelpers;

class ConditionalHelpers
{
    /**
     * Checks if an array has a length greater than zero.
     *
     * @param array $array The array to check.
     * @return bool Returns true if the array has a length greater than zero, false otherwise.
     */
    public static function isArrayHasLength($array)
    {
        return isset($array) && is_array($array) && count($array) > 0;
    }

    /**
     * Checks if a string has a length greater than zero.
     *
     * @param string $string The string to check.
     * @return bool Returns true if the string has a length greater than zero, false otherwise.
     */
    public static function isStringHasLength($string)
    {
        return isset($string) && is_string($string) && strlen($string) > 0;
    }

    /**
     * Checks if a value is a boolean true.
     *
     * @param mixed $boolean The value to check.
     * @return bool Returns true if the value is a boolean true, false otherwise.
     */
    public static function isBooleanTrue($boolean)
    {
        return isset($boolean) && is_bool($boolean) && $boolean === true;
    }

    /**
     * Checks if a value is a boolean false.
     *
     * @param mixed $boolean The value to check.
     * @return bool Returns true if the value is a boolean false, false otherwise.
     */
    public static function isBooleanFalse($boolean)
    {
        return isset($boolean) && is_bool($boolean) && $boolean === false;
    }
}
