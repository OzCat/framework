<?php

namespace OzCat\Services;


class Config
{
    public static function get($key)
    {
        $key = getenv($key);
        if ($key == 'true') {
            return true;
        }
        if ($key == 'false') {
            return false;
        }
        return $key;
    }
}