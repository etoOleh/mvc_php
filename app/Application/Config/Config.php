<?php

namespace App\Application\Config;

use Codin\Dot\Dot;

class Config implements ConfigInterface
{

    public const IGNORE_FILES = ['.', '..'];

    private static array $config;

    public static function get(string $key): mixed
    {
        $dot = new Dot(self::$config);
        return $dot->get($key);
    }

    public static function init(): void
    {
        $path = __DIR__ . '/../../../config';
        $files  = scandir($path);
        $file = array_filter($files, function ($file) {
            return !in_array($file, self::IGNORE_FILES);
        });
        foreach ($file as $item) {
            $data = include "$path/$item";
            if (is_array($data)) {
                self::$config[basename($item, '.php')] = $data;
            }
        }

    }
}
