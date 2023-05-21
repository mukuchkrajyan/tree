<?php

namespace Classes;

class Config
{
    public static function get(string $key)
    {
        $result = null;

        if ($key) {
            $config = $GLOBALS['config'];

            $result = array_key_exists($key, $config) ? $config[$key] : null;
        }

        return $result;
    }
}