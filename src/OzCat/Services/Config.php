<?php

namespace OzCat\Services;


class Config
{
    public static function get($key)
    {
        return getenv($key);
    }
}